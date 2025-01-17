<?php

namespace App\Filament\Resources\Fleet\TankerResource\Pages;

use App\Filament\Resources\Fleet\TankerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTanker extends EditRecord
{
    protected static string $resource = TankerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
