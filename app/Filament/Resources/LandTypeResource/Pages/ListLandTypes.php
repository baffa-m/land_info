<?php

namespace App\Filament\Resources\LandTypeResource\Pages;

use App\Filament\Resources\LandTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandTypes extends ListRecords
{
    protected static string $resource = LandTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
