<?php

namespace App\Filament\Resources\LandSalesResource\Pages;

use App\Filament\Resources\LandSalesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLandSales extends EditRecord
{
    protected static string $resource = LandSalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
