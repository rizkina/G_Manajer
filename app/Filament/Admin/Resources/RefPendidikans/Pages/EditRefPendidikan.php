<?php

namespace App\Filament\Admin\Resources\RefPendidikans\Pages;

use App\Filament\Admin\Resources\RefPendidikans\RefPendidikanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRefPendidikan extends EditRecord
{
    protected static string $resource = RefPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
