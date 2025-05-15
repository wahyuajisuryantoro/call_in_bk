<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use App\Models\Beranda\BerandaTujuan;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Clusters\ManajemenKontenBeranda;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaTujuanResource\Pages;

class BerandaTujuanResource extends Resource
{
    protected static ?string $model = BerandaTujuan::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationLabel = 'Tujuan';
    protected static ?int $navigationSort = 5;
    protected static ?string $cluster = ManajemenKontenBeranda::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Kelola Tujuan')
                    ->description('Tambahkan dan atur poin-poin tujuan')
                    ->schema([
                        Forms\Components\Repeater::make('tujuan_items')
                            ->schema([
                                Forms\Components\Select::make('urutan')
                                    ->label('Urutan')
                                    ->options(array_combine(range(1, 15), range(1, 15)))
                                    ->required(),
                                Forms\Components\Textarea::make('isi')
                                    ->label('Isi Tujuan')
                                    ->required()
                                    ->rows(2),
                            ])
                            ->columns(2)
                            ->itemLabel(fn (array $state): ?string =>
                                $state['isi'] ? 'Tujuan ' . ($state['urutan'] ?? '') . ': ' . Str::limit($state['isi'], 40) : null)
                            ->addActionLabel('Tambah Poin Tujuan')
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
            'index' => Pages\ListBerandaTujuans::route('/'),
            'create' => Pages\CreateBerandaTujuan::route('/create'),
            'edit' => Pages\EditBerandaTujuan::route('/{record}/edit'),
        ];
    }
}