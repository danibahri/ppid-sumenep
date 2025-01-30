<?php

namespace App\Filament\Resources\DetailJenisInformasiResource\Pages;

use App\Filament\Resources\DetailJenisInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailJenisInformasi extends EditRecord
{
    protected static string $resource = DetailJenisInformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
