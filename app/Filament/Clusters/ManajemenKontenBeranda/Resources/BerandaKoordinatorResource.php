<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Beranda\BerandaKoordinator;
use App\Filament\Clusters\ManajemenKontenBeranda;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaKoordinatorResource\Pages;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaKoordinatorResource\RelationManagers;

class BerandaKoordinatorResource extends Resource
{
    protected static ?string $model = BerandaKoordinator::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Koordinator BK';

    protected static ?int $navigationSort = 2;

    protected static ?string $cluster = ManajemenKontenBeranda::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Koordinator')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(255)
                            ->label('Nama Koordinator'),

                        Forms\Components\FileUpload::make('foto')
                            ->label('Foto Koordinator')
                            ->image()
                            ->directory('beranda/koordinator')
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Sambutan')
                    ->schema([
                        Forms\Components\RichEditor::make('sambutan')
                            ->label('Teks Sambutan')
                            ->required()
                            ->columnSpanFull()
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('beranda/koordinator/attachments'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Koordinator')
                    ->searchable(),
                    
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->circular(),
                    
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diupdate')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
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
            'index' => Pages\ListBerandaKoordinators::route('/'),
            'create' => Pages\CreateBerandaKoordinator::route('/create'),
            'edit' => Pages\EditBerandaKoordinator::route('/{record}/edit'),
        ];
    }
}
