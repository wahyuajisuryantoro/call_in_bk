<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaLayananResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerandaLayanan extends EditRecord
{
    protected static string $resource = BerandaLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
