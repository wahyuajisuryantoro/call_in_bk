<?php

namespace App\Filament\Clusters\ManajemenKontenTentang\Resources;

use App\Filament\Clusters\ManajemenKontenTentang;
use App\Filament\Clusters\ManajemenKontenTentang\Resources\TentangKontenResource\Pages;
use App\Filament\Clusters\ManajemenKontenTentang\Resources\TentangKontenResource\RelationManagers;
use App\Models\Tentang\TentangKonten;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TentangKontenResource extends Resource
{
    protected static ?string $model = TentangKonten::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Konten Tentang Kami';
    protected static ?int $navigationSort = 1;
    protected static ?string $cluster = ManajemenKontenTentang::class;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Utama')
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\RichEditor::make('isi')
                            ->label('Isi Konten')
                            ->required()
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('uploads/tentang-konten')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                Forms\Components\Section::make('Gambar')
                    ->schema([
                        Forms\Components\FileUpload::make('gambar1')
                            ->label('Gambar 1')
                            ->image()
                            ->disk('public')
                            ->directory('uploads/tentang-konten')
                            ->maxSize(2048)
                            ->columnSpan(1),
                        Forms\Components\FileUpload::make('gambar2')
                            ->label('Gambar 2')
                            ->image()
                            ->disk('public')
                            ->directory('uploads/tentang-konten')
                            ->maxSize(2048)
                            ->columnSpan(1),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('isi')
                    ->html()
                    ->limit(100),
                Tables\Columns\ImageColumn::make('gambar1')
                    ->label('Gambar 1')
                    ->disk('public'),
                Tables\Columns\ImageColumn::make('gambar2')
                    ->label('Gambar 2')
                    ->disk('public'),
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
            'index' => Pages\ListTentangKontens::route('/'),
            'create' => Pages\CreateTentangKonten::route('/create'),
            'edit' => Pages\EditTentangKonten::route('/{record}/edit'),
        ];
    }
}
