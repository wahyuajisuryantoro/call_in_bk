<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\IsiLayananResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\IsiLayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIsiLayanans extends ListRecords
{
    protected static string $resource = IsiLayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
