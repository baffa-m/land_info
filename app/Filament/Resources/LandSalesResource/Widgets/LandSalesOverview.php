<?php

namespace App\Filament\Resources\LandSalesResource\Widgets;

use App\Models\LandSales;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class LandSalesOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
           Stat::make('Total Land Sells', LandSales::count())
        ];
    }
}
