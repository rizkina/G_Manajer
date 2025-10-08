<?php

namespace App\Filament\Admin\Resources\ProgramJurusans\Pages;

use App\Filament\Admin\Resources\ProgramJurusans\ProgramJurusanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProgramJurusans extends ListRecords
{
    protected static string $resource = ProgramJurusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
