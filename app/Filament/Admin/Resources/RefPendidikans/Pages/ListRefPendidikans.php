<?php

namespace App\Filament\Admin\Resources\RefPendidikans\Pages;

use App\Filament\Admin\Resources\RefPendidikans\RefPendidikanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRefPendidikans extends ListRecords
{
    protected static string $resource = RefPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
