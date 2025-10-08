<?php

namespace App\Filament\Admin\Resources\RefPekerjaans\Pages;

use App\Filament\Admin\Resources\RefPekerjaans\RefPekerjaanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRefPekerjaan extends EditRecord
{
    protected static string $resource = RefPekerjaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
