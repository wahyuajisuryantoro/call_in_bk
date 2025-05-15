<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaMisiResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaMisiResource;
use App\Models\Beranda\BerandaMisi;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBerandaMisi extends CreateRecord
{
    protected static string $resource = BerandaMisiResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $this->misiItems = $data['misi_items'] ?? [];

        if (empty($this->misiItems)) {
            $this->errorBag->add('misi_items', 'Minimal satu item misi harus diisi.');
            $this->halt();
        }
        
        if (!empty($this->misiItems[0])) {
            $data['urutan'] = $this->misiItems[0]['urutan'];
            $data['isi'] = $this->misiItems[0]['isi'];
        }

        unset($data['misi_items']);
        
        return $data;
    }
    
    protected function afterCreate(): void
    {
        if (!empty($this->misiItems) && count($this->misiItems) > 1) {
            for ($i = 1; $i < count($this->misiItems); $i++) {
                BerandaMisi::create([
                    'urutan' => $this->misiItems[$i]['urutan'],
                    'isi' => $this->misiItems[$i]['isi'],
                ]);
            }
        }
    }
}