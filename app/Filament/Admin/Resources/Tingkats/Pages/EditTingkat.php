<?php

namespace App\Filament\Admin\Resources\Tingkats\Pages;

use App\Filament\Admin\Resources\Tingkats\TingkatResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTingkat extends EditRecord
{
    protected static string $resource = TingkatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
