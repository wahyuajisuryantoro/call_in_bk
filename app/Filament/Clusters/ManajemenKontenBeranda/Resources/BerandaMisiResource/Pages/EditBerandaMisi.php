<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaMisiResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaMisiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerandaMisi extends EditRecord
{
    protected static string $resource = BerandaMisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['misi_items'] = [
            [
                'urutan' => $this->record->urutan,
                'isi' => $this->record->isi,
            ]
        ];
        
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (isset($data['misi_items'][0])) {
            $data['urutan'] = $data['misi_items'][0]['urutan'] ?? $this->record->urutan;
            $data['isi'] = $data['misi_items'][0]['isi'] ?? $this->record->isi;
        }

        unset($data['misi_items']);
        
        return $data;
    }

    protected function afterSave(): void
    {
        $this->redirect(self::getResource()::getUrl('index'));
    }
}