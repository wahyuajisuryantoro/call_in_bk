<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaKoordinatorResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaKoordinatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerandaKoordinator extends EditRecord
{
    protected static string $resource = BerandaKoordinatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
