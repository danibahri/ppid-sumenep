<?php

namespace App\Filament\Resources\JenisInformasiResource\Pages;

use App\Filament\Resources\JenisInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisInformasi extends EditRecord
{
    protected static string $resource = JenisInformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
