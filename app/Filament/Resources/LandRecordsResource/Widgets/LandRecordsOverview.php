<?php

namespace App\Filament\Resources\LandRecordsResource\Widgets;

use App\Models\LandRecords;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LandRecordsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
           Stat::make('Total Land Records', LandRecords::count())
        ];
    }
}
