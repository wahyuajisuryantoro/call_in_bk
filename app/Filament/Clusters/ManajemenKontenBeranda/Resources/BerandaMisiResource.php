<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use App\Models\Beranda\BerandaMisi;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Clusters\ManajemenKontenBeranda;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaMisiResource\Pages;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaMisiResource\RelationManagers;

class BerandaMisiResource extends Resource
{
    protected static ?string $model = BerandaMisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';
    protected static ?string $navigationLabel = 'Misi';
    protected static ?int $navigationSort = 4;
    protected static ?string $cluster = ManajemenKontenBeranda::class;
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('Kelola Misi')
                ->description('Tambahkan dan atur poin-poin misi')
                ->schema([
                    Forms\Components\Repeater::make('misi_items')
                        ->schema([
                            Forms\Components\Select::make('urutan')
                                ->label('Urutan')
                                ->options(array_combine(range(1, 15), range(1, 15)))
                                ->required(),
                            Forms\Components\Textarea::make('isi')
                                ->label('Isi Misi')
                                ->required()
                                ->rows(2),
                        ])
                        ->columns(2)
                        ->itemLabel(fn (array $state): ?string =>
                            $state['isi'] ? 'Misi ' . ($state['urutan'] ?? '') . ': ' . Str::limit($state['isi'], 40) : null)
                        ->addActionLabel('Tambah Poin Misi')
                        ->defaultItems(0)
                        ->collapsible()
                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('urutan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('isi')
                    ->limit(100)
                    ->searchable(),
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
            'index' => Pages\ListBerandaMisis::route('/'),
            'create' => Pages\CreateBerandaMisi::route('/create'),
            'edit' => Pages\EditBerandaMisi::route('/{record}/edit'),
        ];
    }
}
