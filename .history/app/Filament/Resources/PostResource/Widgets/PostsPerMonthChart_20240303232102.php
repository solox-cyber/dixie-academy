<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Filament\Widgets\ChartWidget;

class PostsPerMonthChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $data = Trend::model(BlogPost::class)
        ->between(
            start: now()->startOfYear(),
            end : now()->endOfYear(),
        )->perMonth()
        ->count();
        return [
           'datasets' => [
            'label' => 'Blog posts',
            'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
           ],

        ],
        'labels' => $data->map(TrendValue $value) => $value->dat,
    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
