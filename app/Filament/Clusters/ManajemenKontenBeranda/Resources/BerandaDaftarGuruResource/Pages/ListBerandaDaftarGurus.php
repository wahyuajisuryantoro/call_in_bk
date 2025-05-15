<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaDaftarGuruResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaDaftarGuruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBerandaDaftarGurus extends ListRecords
{
    protected static string $resource = BerandaDaftarGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
