<?php

namespace App\Filament\Resources\PesanSiswaResource\Pages;

use App\Filament\Resources\PesanSiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPesanSiswas extends ListRecords
{
    protected static string $resource = PesanSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
           
        ];
    }

    public function mount(): void
    {
        abort_unless(static::getResource()::canViewAny(), 403);
    }
}
