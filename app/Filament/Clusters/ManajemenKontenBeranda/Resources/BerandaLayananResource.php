<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Tables\Filters\Filter;
use App\Models\Beranda\BerandaLayanan;
use Filament\Forms\Components\Section;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Clusters\ManajemenKontenBeranda;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaLayananResource\Pages;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaLayananResource\RelationManagers;

class BerandaLayananResource extends Resource
{
    protected static ?string $model = BerandaLayanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?string $cluster = ManajemenKontenBeranda::class;

    protected static ?string $navigationLabel = 'Layanan Beranda';

    protected static ?string $modelLabel = 'Layanan Beranda';

    protected static ?string $pluralModelLabel = 'Layanan Beranda';

    protected static ?int $navigationSort = 6;


    public static function form(Form $form): Form
    {
        return $form
           ->schema([
                Section::make('Informasi Layanan')
                    ->description('Kelola informasi dasar layanan yang akan ditampilkan di beranda')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('nama_layanan')
                                    ->label('Nama Layanan')
                                    ->required()
                                    ->maxLength(255)
                                    ->helperText('Nama layanan yang akan ditampilkan di beranda'),

                                TextInput::make('urutan')
                                    ->label('Urutan Tampil')
                                    ->numeric()
                                    ->default(1)
                                    ->minValue(1)
                                    ->maxValue(100)
                                    ->required(),
                            ]),

                        TextInput::make('deskripsi')
                            ->label('Deskripsi Layanan')
                            ->required()
                            ->placeholder('Masukkan deskripsi singkat layanan')
                            ->columnSpanFull(),
                    ])
                    ->columnSpan(2),

                Section::make('Media')
                    ->description('Upload gambar untuk representasi visual layanan')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Gambar Layanan')
                            ->image()
                            ->required()
                            ->directory('beranda/layanan')
                            ->disk('public')
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->imageCropAspectRatio('1:1')
                            ->imageResizeTargetWidth(400)
                            ->imageResizeTargetHeight(400)
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->helperText('Upload gambar dengan rasio 1:1 (persegi). Maksimal 2MB. Format: JPG, PNG, WebP')
                            ->columnSpanFull(),
                    ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
           ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->size(60)
                    ->circular(),

                TextColumn::make('nama_layanan')
                    ->label('Nama Layanan')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Medium)
                    ->copyable()
                    ->copyMessage('Nama layanan berhasil disalin'),

                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= 50) {
                            return null;
                        }
                        return $state;
                    })
                    ->wrap(),

                TextColumn::make('urutan')
                    ->label('Urutan')
                    ->sortable()
                    ->badge()
                    ->color('primary'),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                 Filter::make('urutan_rendah')
                    ->label('Urutan 1-5')
                    ->query(fn (Builder $query): Builder => $query->where('urutan', '<=', 5)),
                
                Filter::make('created_today')
                    ->label('Dibuat Hari Ini')
                    ->query(fn (Builder $query): Builder => $query->whereDate('created_at', today())),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                   ->label('Edit'),      
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus'),
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
            'index' => Pages\ListBerandaLayanans::route('/'),
            'create' => Pages\CreateBerandaLayanan::route('/create'),
            'edit' => Pages\EditBerandaLayanan::route('/{record}/edit'),
        ];
    }
}
