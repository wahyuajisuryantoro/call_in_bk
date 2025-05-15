<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaVisiResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaVisiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBerandaVisis extends ListRecords
{
    protected static string $resource = BerandaVisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
