<?php

namespace App\Filament\Resources\TableclientResource\Pages;

use App\Filament\Resources\TableclientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTableclients extends ListRecords
{
    protected static string $resource = TableclientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
