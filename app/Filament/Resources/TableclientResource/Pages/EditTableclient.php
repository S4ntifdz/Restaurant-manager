<?php

namespace App\Filament\Resources\TableclientResource\Pages;

use App\Filament\Resources\TableclientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTableclient extends EditRecord
{
    protected static string $resource = TableclientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
