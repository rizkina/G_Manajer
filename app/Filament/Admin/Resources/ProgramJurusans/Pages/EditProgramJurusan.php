<?php

namespace App\Filament\Admin\Resources\ProgramJurusans\Pages;

use App\Filament\Admin\Resources\ProgramJurusans\ProgramJurusanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgramJurusan extends EditRecord
{
    protected static string $resource = ProgramJurusanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
