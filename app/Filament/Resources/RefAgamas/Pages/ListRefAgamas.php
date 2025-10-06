<?php

namespace App\Filament\Resources\RefAgamas\Pages;

use App\Filament\Resources\RefAgamas\RefAgamaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRefAgamas extends ListRecords
{
    protected static string $resource = RefAgamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
