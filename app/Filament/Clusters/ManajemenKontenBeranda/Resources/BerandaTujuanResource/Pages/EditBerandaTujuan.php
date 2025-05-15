<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaTujuanResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaTujuanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerandaTujuan extends EditRecord
{
    protected static string $resource = BerandaTujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['tujuan_items'] = [
            [
                'urutan' => $this->record->urutan,
                'isi' => $this->record->isi,
            ]
        ];
        
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['tujuan_items'][0])) {
            $data['urutan'] = $data['tujuan_items'][0]['urutan'] ?? $this->record->urutan;
            $data['isi'] = $data['tujuan_items'][0]['isi'] ?? $this->record->isi;
        }
        
        unset($data['tujuan_items']);
        
        return $data;
    }

    protected function afterSave(): void
    {
        $this->redirect(self::getResource()::getUrl('index'));
    }
}