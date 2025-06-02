<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\IsiLayananResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\IsiLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIsiLayanan extends EditRecord
{
    protected static string $resource = IsiLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
