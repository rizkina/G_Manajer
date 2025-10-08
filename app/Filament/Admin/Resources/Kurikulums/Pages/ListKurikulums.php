<?php

namespace App\Filament\Admin\Resources\Kurikulums\Pages;

use App\Filament\Admin\Resources\Kurikulums\KurikulumResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKurikulums extends ListRecords
{
    protected static string $resource = KurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
