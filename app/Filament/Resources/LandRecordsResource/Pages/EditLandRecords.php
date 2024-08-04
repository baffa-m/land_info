<?php

namespace App\Filament\Resources\LandRecordsResource\Pages;

use App\Filament\Resources\LandRecordsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLandRecords extends EditRecord
{
    protected static string $resource = LandRecordsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
