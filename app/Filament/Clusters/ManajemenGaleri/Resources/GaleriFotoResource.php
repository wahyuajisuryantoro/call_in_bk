<?php

namespace App\Filament\Clusters\ManajemenGaleri\Resources;

use App\Filament\Clusters\ManajemenGaleri;
use App\Filament\Clusters\ManajemenGaleri\Resources\GaleriFotoResource\Pages;
use App\Filament\Clusters\ManajemenGaleri\Resources\GaleriFotoResource\RelationManagers;
use App\Models\Galeri\GaleriFoto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriFotoResource extends Resource
{
    protected static ?string $model = GaleriFoto::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';
    protected static ?string $navigationLabel = 'Galeri Foto';
    protected static ?int $navigationSort = 1;
    protected static ?string $cluster = ManajemenGaleri::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Foto')
                    ->schema([
                        Forms\Components\TextInput::make('judul_foto')
                            ->label('Judul Foto')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('tanggal_upload')
                            ->label('Tanggal Upload')
                            ->required()
                            ->default(now()),
                        Forms\Components\TextInput::make('kreator')
                            ->label('Kreator/Fotografer')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Unggah Foto')
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto')
                            ->image()
                            ->required()
                            ->disk('public')
                            ->directory('uploads/galeri-foto')
                            ->maxSize(2048)
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->disk('public')
                    ->square(),
                Tables\Columns\TextColumn::make('judul_foto')
                    ->label('Judul Foto')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_upload')
                    ->label('Tanggal Upload')
                    ->date('d M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kreator')
                    ->label('Kreator')
                    ->searchable()
                    ->sortable(),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListGaleriFotos::route('/'),
            'create' => Pages\CreateGaleriFoto::route('/create'),
            'edit' => Pages\EditGaleriFoto::route('/{record}/edit'),
        ];
    }
}
