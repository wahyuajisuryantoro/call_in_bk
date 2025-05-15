<?php

namespace App\Filament\Resources\PengaturanSitusResource\Pages;

use App\Filament\Resources\PengaturanSitusResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Filament\Notifications\Notification;
use App\Models\Pengaturan\PengaturanSitus;
use Illuminate\Contracts\View\View;

class ManagePengaturanSitus extends ManageRecords
{
    protected static string $resource = PengaturanSitusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('save')
                ->label('Simpan Pengaturan')
                ->action(function (array $data): void {
                    $pengaturan = PengaturanSitus::first();
                    
                    if ($pengaturan) {
                        $pengaturan->update($data);
                    } else {
                        PengaturanSitus::create($data);
                    }
                    
                    Notification::make()
                        ->title('Pengaturan situs berhasil disimpan')
                        ->success()
                        ->send();
                })
                ->color('primary')
                ->form(fn ($form) => PengaturanSitusResource::form($form)),
        ];
    }

    public function mount(): void
    {
        parent::mount();
        $this->fillForm();
    }
    
    protected function fillForm(): void
    {
        $pengaturan = PengaturanSitus::first();
        
        if ($pengaturan) {
            $this->form->fill($pengaturan->toArray());
        }
    }

    public function getTitle(): string
    {
        return 'Pengaturan Situs';
    }

    protected function getActions(): array
    {
        return [];
    }

    public function getTableContent(): View|null
    {
        // Menampilkan view card sebagai pengganti tabel
        return view('filament.custom.pengaturan-situs-card', [
            'pengaturan' => PengaturanSitus::first(),
        ]);
    }
    
    protected function getTableContentFooter(): View|null
    {
        // Override untuk tidak menampilkan footer tabel
        return null;
    }
    
    protected function getTableContentHeader(): View|null
    {
        // Override untuk tidak menampilkan header tabel
        return null;
    }
    
    public function getEmptyStateHeading(): ?string
    {
        $pengaturan = PengaturanSitus::first();
        
        if ($pengaturan) {
            return 'Pengaturan Situs';
        }
        
        return 'Belum ada pengaturan situs';
    }
    
    public function getEmptyStateDescription(): ?string
    {
        $pengaturan = PengaturanSitus::first();
        
        if ($pengaturan) {
            return 'Berikut adalah pengaturan situs yang telah dikonfigurasi. Klik tombol "Simpan Pengaturan" untuk mengubah.';
        }
        
        return 'Silakan klik tombol "Simpan Pengaturan" untuk menambahkan konfigurasi situs.';
    }
    
    public function getEmptyStateIcon(): ?string
    {
        return 'heroicon-o-cog';
    }
}