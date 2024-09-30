<?php

namespace App\Filament\Resources\FirmsResource\Pages;

use App\Filament\Resources\FirmsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFirms extends EditRecord
{
    protected static string $resource = FirmsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
