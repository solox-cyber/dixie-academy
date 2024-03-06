<?php

namespace App\Filament\Resources\UserResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
u

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
           Stat::make('Total Users', User::count()),
        ];
    }
}
