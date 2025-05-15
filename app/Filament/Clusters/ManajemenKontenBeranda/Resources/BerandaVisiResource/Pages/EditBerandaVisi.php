<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaVisiResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaVisiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerandaVisi extends EditRecord
{
    protected static string $resource = BerandaVisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
