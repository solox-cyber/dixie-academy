<?php

namespace App\Filament\Resources\CommentResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Comment;
use Filament\Tables\Columns\TextColumn;

class LatestComments extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
               Comment::whereDate('created_at', '>', now()->subDays(14)->startOfDay())
            )
            ->columns([
            TextColumn::make('user.name'),
            TextColumn::make('post.title'),
            TextColumn::make('comment'),
            TextColumn::make('created_at')->date(),
            ]);
    }
}
