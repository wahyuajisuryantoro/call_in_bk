<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaTujuanResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaTujuanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBerandaTujuans extends ListRecords
{
    protected static string $resource = BerandaTujuanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
