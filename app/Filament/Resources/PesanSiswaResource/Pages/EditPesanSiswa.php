<?php

namespace App\Filament\Resources\PesanSiswaResource\Pages;

use App\Filament\Resources\PesanSiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesanSiswa extends EditRecord
{
    protected static string $resource = PesanSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
