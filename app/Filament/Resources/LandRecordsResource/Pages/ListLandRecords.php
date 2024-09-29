<?php

namespace App\Filament\Resources\LandRecordsResource\Pages;

use App\Filament\Resources\LandRecordsResource;
use App\Filament\Resources\LandRecordsResource\Widgets\LandRecordsOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLandRecords extends ListRecords
{
    protected static string $resource = LandRecordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            LandRecordsOverview::class
        ];
    }
}
