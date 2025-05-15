<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaTujuanResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaTujuanResource;
use App\Models\Beranda\BerandaTujuan;
use Filament\Resources\Pages\CreateRecord;

class CreateBerandaTujuan extends CreateRecord
{
    protected static string $resource = BerandaTujuanResource::class;
    
    // Properti untuk menyimpan items dari repeater
    protected $tujuanItems = [];
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $this->tujuanItems = $data['tujuan_items'] ?? [];

        if (empty($this->tujuanItems)) {
            $this->errorBag->add('tujuan_items', 'Minimal satu item tujuan harus diisi.');
            $this->halt();
        }
        
        if (!empty($this->tujuanItems[0])) {
            $data['urutan'] = $this->tujuanItems[0]['urutan'];
            $data['isi'] = $this->tujuanItems[0]['isi'];
        }

        unset($data['tujuan_items']);
        
        return $data;
    }
    
    protected function afterCreate(): void
    {
        if (!empty($this->tujuanItems) && count($this->tujuanItems) > 1) {
            for ($i = 1; $i < count($this->tujuanItems); $i++) {
                BerandaTujuan::create([
                    'urutan' => $this->tujuanItems[$i]['urutan'],
                    'isi' => $this->tujuanItems[$i]['isi'],
                ]);
            }
        }
    }
}