<?php

namespace App\Filament\Resources\DetailJenisInformasiResource\Pages;

use App\Filament\Resources\DetailJenisInformasiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailJenisInformasis extends ListRecords
{
    protected static string $resource = DetailJenisInformasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
