<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources;

use App\Filament\Clusters\ManajemenKontenBeranda;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaVisiResource\Pages;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaVisiResource\RelationManagers;
use App\Models\Beranda\BerandaVisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BerandaVisiResource extends Resource
{
    protected static ?string $model = BerandaVisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-eye';

    protected static ?string $navigationLabel = 'Visi';
    protected static ?int $navigationSort = 3;
    protected static ?string $cluster = ManajemenKontenBeranda::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('isi')
                    ->required()
                    ->label('Isi Visi')
                    ->rows(4),
                Forms\Components\FileUpload::make('foto')
                    ->directory('beranda/visi')
                    ->image()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('16:9')
                    ->imageResizeTargetWidth('800')
                    ->imageResizeTargetHeight('450')
                    ->label('Foto'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('isi')
                    ->limit(100)
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto'),
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
            'index' => Pages\ListBerandaVisis::route('/'),
            'create' => Pages\CreateBerandaVisi::route('/create'),
            'edit' => Pages\EditBerandaVisi::route('/{record}/edit'),
        ];
    }
}
