<?php

namespace App\Filament\Admin\Resources\RefPekerjaans\Pages;

use App\Filament\Admin\Resources\RefPekerjaans\RefPekerjaanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRefPekerjaans extends ListRecords
{
    protected static string $resource = RefPekerjaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
