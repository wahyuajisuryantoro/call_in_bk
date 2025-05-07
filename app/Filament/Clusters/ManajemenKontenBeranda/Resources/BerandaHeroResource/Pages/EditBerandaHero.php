<?php

namespace App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaHeroResource\Pages;

use App\Filament\Clusters\ManajemenKontenBeranda\Resources\BerandaHeroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBerandaHero extends EditRecord
{
    protected static string $resource = BerandaHeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
