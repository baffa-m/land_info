<?php

namespace App\Filament\Resources\LandSalesResource\Pages;

use App\Filament\Resources\LandSalesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandSales extends ListRecords
{
    protected static string $resource = LandSalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
