<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Beranda\BerandaHero;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Clusters\ManajemenKontenBeranda;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaHeroResource\Pages;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaHeroResource\RelationManagers;

class BerandaHeroResource extends Resource
{
    protected static ?string $model = BerandaHero::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    
    protected static ?string $navigationLabel = 'Hero Banner';

    protected static ?int $navigationSort = 1;
    
    protected static ?string $cluster = ManajemenKontenBeranda::class;

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Section::make('Informasi Utama')
                ->schema([
                    Forms\Components\TextInput::make('judul')
                        ->required()
                        ->maxLength(255)
                        ->label('Judul Hero'),
                        
                    Forms\Components\Textarea::make('subjudul')
                        ->label('Subjudul Hero')
                        ->maxLength(500),
                ]),
            
            Forms\Components\Section::make('Gambar')
                ->schema([
                    Forms\Components\FileUpload::make('gambar1')
                        ->label('Gambar Utama')
                        ->image()
                        ->directory('beranda/hero')
                        ->columnSpanFull(),
                        
                    Forms\Components\FileUpload::make('gambar2')
                        ->label('Gambar Kedua')
                        ->image()
                        ->directory('beranda/hero')
                        ->columnSpanFull(),
                ]),
                
            Forms\Components\Section::make('Kutipan')
                ->schema([
                    Forms\Components\Textarea::make('kutipan')
                        ->label('Teks Kutipan')
                        ->maxLength(500),
                        
                    Forms\Components\TextInput::make('penulis_kutipan')
                        ->label('Penulis Kutipan')
                        ->maxLength(255),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul Hero')
                    ->searchable(),
                    
                Tables\Columns\ImageColumn::make('gambar1')
                    ->label('Gambar Utama')
                    ->circular(),
                    
                Tables\Columns\TextColumn::make('kutipan')
                    ->label('Kutipan')
                    ->limit(30),
                    
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
            'index' => Pages\ListBerandaHeroes::route('/'),
            'create' => Pages\CreateBerandaHero::route('/create'),
            'edit' => Pages\EditBerandaHero::route('/{record}/edit'),
        ];
    }
}
