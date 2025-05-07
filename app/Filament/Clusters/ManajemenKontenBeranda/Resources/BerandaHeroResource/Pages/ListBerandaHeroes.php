<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaHeroResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaHeroResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBerandaHeroes extends ListRecords
{
    protected static string $resource = BerandaHeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
