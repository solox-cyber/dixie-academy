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
        )
        return [
           'datasets' => 'Blog posts',
           'data' => $data->map(fn (TrendValue $value))
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
