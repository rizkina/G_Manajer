<?php

namespace App\Filament\Resources\RefAgamas\Pages;

use App\Filament\Resources\RefAgamas\RefAgamaResource;
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
