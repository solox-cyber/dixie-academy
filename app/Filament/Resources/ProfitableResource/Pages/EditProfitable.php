<?php

namespace App\Filament\Resources\ProfitableResource\Pages;

use App\Filament\Resources\ProfitableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfitable extends EditRecord
{
    protected static string $resource = ProfitableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
