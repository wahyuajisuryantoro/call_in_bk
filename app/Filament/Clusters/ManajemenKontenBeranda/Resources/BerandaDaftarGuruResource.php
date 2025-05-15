<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources;

use App\Filament\Clusters\ManajemenKontenBeranda;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaDaftarGuruResource\Pages;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaDaftarGuruResource\RelationManagers;
use App\Models\Beranda\BerandaDaftarGuru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BerandaDaftarGuruResource extends Resource
{
    protected static ?string $model = BerandaDaftarGuru::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationLabel = 'Daftar Guru';
    protected static ?int $navigationSort = 6;

    protected static ?string $cluster = ManajemenKontenBeranda::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Guru')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('nip')
                            ->label('NIP')
                            ->nullable()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('jabatan')
                            ->label('Jabatan')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('bio_singkat')
                            ->label('Biografi Singkat')
                            ->nullable()
                            ->rows(3)
                            ->maxLength(500)
                            ->helperText('Maksimal 500 karakter'),
                        Forms\Components\Select::make('urutan')
                            ->label('Urutan')
                            ->options(array_combine(range(1, 50), range(1, 50)))
                            ->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Media')
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto Profil')
                            ->nullable()
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth('300')
                            ->imageResizeTargetHeight('300')
                            ->directory('guru/foto'),

                        Forms\Components\FileUpload::make('avatar')
                            ->label('Avatar/Icon')
                            ->nullable()
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth('150')
                            ->imageResizeTargetHeight('150')
                            ->directory('guru/avatar')
                            ->helperText('Avatar/icon yang akan ditampilkan sebagai alternatif foto profil'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('urutan')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->circular(),
                Tables\Columns\TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nip')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bio_singkat')
                    ->limit(50)
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBerandaDaftarGurus::route('/'),
            'create' => Pages\CreateBerandaDaftarGuru::route('/create'),
            'edit' => Pages\EditBerandaDaftarGuru::route('/{record}/edit'),
        ];
    }
}
