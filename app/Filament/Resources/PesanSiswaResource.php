<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Pesan\PesanSiswa;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Illuminate\Support\HtmlString;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PesanSiswaResource\Pages;
use App\Filament\Resources\PesanSiswaResource\RelationManagers;

class PesanSiswaResource extends Resource
{
   protected static ?string $model = PesanSiswa::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-envelope';
    
    protected static ?string $navigationLabel = 'Pesan Masuk';
    
    protected static ?string $modelLabel = 'Pesan Siswa';
    
    protected static ?string $pluralModelLabel = 'Pesan-pesan Siswa';
    
    protected static ?int $navigationSort = 5;
    
    protected static ?string $navigationGroup = 'Komunikasi';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Pengirim')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('judul')
                    ->label('Subjek')
                    ->searchable()
                    ->sortable()
                    ->limit(30),
                TextColumn::make('created_at')
                    ->label('Diterima')
                    ->dateTime('d M Y - H:i')
                    ->sortable(),
            ])
            ->actions([
                Action::make('view')
                    ->label('Lihat Pesan')
                    ->icon('heroicon-o-eye')
                    ->color(Color::Blue)
                    ->modalHeading(fn (PesanSiswa $record): string => "Pesan dari {$record->nama}")
                    ->modalDescription(fn (PesanSiswa $record): string => "Diterima pada " . $record->created_at->format('d M Y - H:i'))
                    ->modalContent(function (PesanSiswa $record): HtmlString {
                        $html = view('filament.resources.pesan-siswa.message-detail', ['pesan' => $record])->render();
                        return new HtmlString($html);
                    })
                    ->modalSubmitAction(false)
                    ->modalCancelAction(false)
                    ->modalWidth('md')
            ])
            ->bulkActions([
                // Hapus fitur bulk actions
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListPesanSiswas::route('/'),
        ];
    }
}
