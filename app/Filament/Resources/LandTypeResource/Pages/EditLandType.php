<?php

namespace App\Filament\Resources\LandTypeResource\Pages;

use App\Filament\Resources\LandTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLandType extends EditRecord
{
    protected static string $resource = LandTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
