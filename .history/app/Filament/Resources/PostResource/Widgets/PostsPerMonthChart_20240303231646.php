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
            start: now()->startOf()
        )
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
