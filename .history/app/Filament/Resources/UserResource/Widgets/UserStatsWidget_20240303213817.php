<?php

namespace App\Filament\Resources\UserResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;

class UserStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
           Stat::make('Total Users', User::count()),
           Stat::make('Total Admin', User::where()count()),
           Stat::make('Total Editor', User::count()),
           Stat::make('Total Users', User::count()),
        ];
    }
}
