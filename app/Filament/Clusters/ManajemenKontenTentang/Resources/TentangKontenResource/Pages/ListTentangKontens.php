<?php

namespace App\Filament\Clusters\ManajemenKontenTentang\Resources\TentangKontenResource\Pages;

use App\Filament\Clusters\ManajemenKontenTentang\Resources\TentangKontenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTentangKontens extends ListRecords
{
    protected static string $resource = TentangKontenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
