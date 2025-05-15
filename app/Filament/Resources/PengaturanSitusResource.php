<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use App\Models\Pengaturan\PengaturanSitus;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Group;
use App\Filament\Resources\PengaturanSitusResource\Pages;

class PengaturanSitusResource extends Resource
{
    protected static ?string $model = PengaturanSitus::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationLabel = 'Pengaturan Situs';
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationGroup = 'Pengaturan';

    // Agar tidak muncul di breadcrumbs
    protected static bool $shouldRegisterNavigation = true;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('Informasi Dasar')
                            ->schema([
                                TextInput::make('nama_situs')
                                    ->label('Nama Situs')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('deskripsi')
                                    ->label('Deskripsi Situs')
                                    ->maxLength(100)
                                    ->placeholder('Tuliskan deskripsi singkat situs (maks 100 karakter)')
                                    ->columnSpanFull(),
                                FileUpload::make('logo')
                                    ->label('Logo Situs')
                                    ->image()
                                    ->disk('public')
                                    ->directory('uploads/pengaturan')
                                    ->maxSize(1024)
                                    ->columnSpanFull(),
                            ])
                            ->columns(1),

                        Section::make('Informasi Kontak')
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('telepon')
                                    ->label('Nomor Telepon')
                                    ->tel()
                                    ->required()
                                    ->maxLength(20),
                                Textarea::make('alamat')
                                    ->label('Alamat')
                                    ->required()
                                    ->rows(3)
                                    ->columnSpanFull(),
                                TextInput::make('link_map')
                                    ->label('Link Google Maps (Buka di Tab Baru)')
                                    ->placeholder('https://www.google.com/maps/place/...')
                                    ->helperText('Masukkan link <strong>Google Maps biasa</strong> (bukan embed). Contoh: https://www.google.com/maps/place/... <br>Link ini digunakan untuk membuka Google Maps di tab baru.')
                                    ->maxLength(255)
                                    ->columnSpanFull()


                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),

                Group::make()
                    ->schema([
                        Section::make('Media Sosial')
                            ->schema([
                                TextInput::make('facebook')
                                    ->label('URL Facebook')
                                    ->url()
                                    ->prefix('https://')
                                    ->maxLength(255),
                                TextInput::make('instagram')
                                    ->label('URL Instagram')
                                    ->url()
                                    ->prefix('https://')
                                    ->maxLength(255),
                                TextInput::make('twitter')
                                    ->label('URL Twitter')
                                    ->url()
                                    ->prefix('https://')
                                    ->maxLength(255),
                                TextInput::make('map')
                                    ->label('Link Google Maps (Embed/Iframe)')
                                    ->placeholder('https://www.google.com/maps/embed?pb=...')
                                    ->helperText('Masukkan link <strong>iframe embed</strong> Google Maps. Contoh: https://www.google.com/maps/embed?pb=... <br>Link ini digunakan untuk menampilkan peta di website.')
                                    ->maxLength(255)
                                    ->columnSpanFull()

                            ])
                            ->columns(1),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditPengaturanSitus::route('/'),
        ];
    }
}