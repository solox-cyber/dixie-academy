<?php

namespace App\Filament\Resources\AboutProfileImageResource\Pages;

use App\Filament\Resources\AboutProfileImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutProfileImages extends ListRecords
{
    protected static string $resource = AboutProfileImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
