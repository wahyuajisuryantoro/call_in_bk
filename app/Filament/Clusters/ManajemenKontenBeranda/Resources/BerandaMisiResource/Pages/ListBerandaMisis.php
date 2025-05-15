<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaMisiResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaMisiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBerandaMisis extends ListRecords
{
    protected static string $resource = BerandaMisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
