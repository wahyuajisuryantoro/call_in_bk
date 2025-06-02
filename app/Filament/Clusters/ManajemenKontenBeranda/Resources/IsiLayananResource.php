<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Beranda\IsiLayanan;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Clusters\ManajemenKontenBeranda;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\IsiLayananResource\Pages;
use App\Filament\Clusters\ManajemenKontenBeranda\Resources\IsiLayananResource\RelationManagers;

class IsiLayananResource extends Resource
{
    protected static ?string $model = IsiLayanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = ManajemenKontenBeranda::class;
    protected static ?string $navigationLabel = 'Isi Layanan';

    protected static ?string $modelLabel = 'Isi Layanan';

    protected static ?string $pluralModelLabel = 'Isi Layanan';
    protected static ?int $navigationSort = 7;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Dasar')
                    ->schema([
                        Select::make('layanan_id')
                            ->label('Layanan')
                            ->required()
                            ->relationship('layanan', 'nama_layanan')
                            ->searchable()
                            ->preload()
                            ->placeholder('Pilih layanan')
                            ->helperText('Pilih layanan yang akan ditambahkan kontennya'),

                        TextInput::make('judul')
                            ->label('Judul Isi Layanan')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Masukkan judul isi layanan')
                            ->helperText('Judul untuk konten layanan ini'),

                        RichEditor::make('deskripsi_layanan')
                            ->label('Deskripsi Layanan')
                            ->required()
                            ->placeholder('Masukkan deskripsi detail layanan')
                            ->helperText('Deskripsi lengkap tentang layanan ini'),

                        TextInput::make('urutan')
                            ->label('Urutan Tampil')
                            ->numeric()
                            ->default(0)
                            ->minValue(0)
                            ->placeholder('0')
                            ->helperText('Urutan tampil pada halaman (semakin kecil semakin awal)'),
                    ])
                    ->columns(2),

                Section::make('Unggah Gambar Layanan')
                    ->description('Upload gambar untuk layanan ini (minimal 1, maksimal 5 gambar)')
                    ->schema([
                        FileUpload::make('gambar_layanan')
                            ->label('Gambar Layanan')
                            ->multiple()
                            ->image()
                            ->directory('uploads/isi-layanan')
                            ->visibility('public')
                            ->imageResizeTargetWidth(800)
                            ->imageResizeTargetHeight(450)
                            ->maxSize(8048)
                            ->maxFiles(5)
                            ->minFiles(1)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                            ->reorderable()
                            ->imagePreviewHeight('150')
                            ->panelLayout('grid')
                            ->helperText('Upload minimal 1 dan maksimal 5 gambar. Ukuran maksimal 8MB per gambar.')
                    ])
                    ->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('layanan.nama_layanan')
                    ->label('Layanan')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),

                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable()
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 50 ? $state : null;
                    }),

                TextColumn::make('deskripsi_layanan')
                    ->label('Deskripsi')
                    ->limit(100)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 100 ? $state : null;
                    }),

                TextColumn::make('jumlah_gambar')
                    ->label('Jumlah Gambar')
                    ->getStateUsing(fn(IsiLayanan $record): int => count($record->gambar_layanan ?? []))
                    ->badge()
                    ->color(fn(int $state): string => match (true) {
                        $state === 0 => 'danger',
                        $state <= 2 => 'warning',
                        default => 'success',
                    }),

                ImageColumn::make('gambar_utama')
                    ->label('Gambar Utama')
                    ->getStateUsing(function (IsiLayanan $record): ?string {
                        $gambar = $record->gambar_layanan;
                        return is_array($gambar) && !empty($gambar) ? $gambar[0] : null;
                    })
                    ->size(60)
                    ->circular(),

                TextColumn::make('urutan')
                    ->label('Urutan')
                    ->sortable()
                    ->badge()
                    ->color('gray'),

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
                SelectFilter::make('layanan_id')
                    ->label('Filter Layanan')
                    ->relationship('layanan', 'nama_layanan')
                    ->searchable()
                    ->preload(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Hapus Terpilih'),
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
            'index' => Pages\ListIsiLayanans::route('/'),
            'create' => Pages\CreateIsiLayanan::route('/create'),
            'edit' => Pages\EditIsiLayanan::route('/{record}/edit'),
        ];
    }
}
