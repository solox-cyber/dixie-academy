<?php

namespace App\Filament\Resources\CommentResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\

class LatestComments extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
               Comment::whereDate('created_at', '>', now()->subDays(14)->startOfDay())
            )
            ->columns([
                // ...
            ]);
    }
}
