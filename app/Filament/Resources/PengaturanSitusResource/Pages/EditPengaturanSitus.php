<?php

namespace App\Filament\Resources\PengaturanSitusResource\Pages;

use App\Filament\Resources\PengaturanSitusResource;
use App\Models\Pengaturan\PengaturanSitus;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;

class EditPengaturanSitus extends EditRecord
{
    protected static string $resource = PengaturanSitusResource::class;
    
    protected function getHeaderActions(): array
    {
        return [];
    }
    
    public function getTitle(): string
    {
        return 'Pengaturan Situs';
    }

    public function getBreadcrumbs(): array
    {
        return [];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    
    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Pengaturan situs berhasil diupdate');
    }
    
    public function mount($record = null): void
    {
        // Cari record pertama atau buat jika tidak ada
        $pengaturan = PengaturanSitus::first();
        
        if (!$pengaturan) {
            $pengaturan = PengaturanSitus::create([
                'nama_situs' => 'Call In BK',
                'email' => 'info@example.com',
                'telepon' => '08xxxxxxxxxx',
                'alamat' => 'Alamat sekolah',
            ]);
        }
        
        // Panggil parent mount dengan ID yang sudah kita dapat
        parent::mount($pengaturan->id);
    }
    
    public function getSubheading(): ?string
    {
        return 'Kelola informasi umum website';
    }
}