<?php

namespace App\Filament\Admin\Resources\RefPenghasilans\Pages;

use App\Filament\Admin\Resources\RefPenghasilans\RefPenghasilanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRefPenghasilans extends ListRecords
{
    protected static string $resource = RefPenghasilanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
