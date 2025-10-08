<?php

namespace App\Filament\Admin\Resources\RefAgamas\Pages;

use App\Filament\Admin\Resources\RefAgamas\RefAgamaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRefAgama extends EditRecord
{
    protected static string $resource = RefAgamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
