<?php

namespace App\Filament\Resources\FirmsResource\Pages;

use App\Filament\Resources\FirmsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFirms extends ListRecords
{
    protected static string $resource = FirmsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
