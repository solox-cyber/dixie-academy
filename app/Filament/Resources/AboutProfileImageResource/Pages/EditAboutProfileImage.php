<?php

namespace App\Filament\Resources\AboutProfileImageResource\Pages;

use App\Filament\Resources\AboutProfileImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutProfileImage extends EditRecord
{
    protected static string $resource = AboutProfileImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
