<?php

namespace App\Filament\Admin\Resources\Rombels\Pages;

use App\Filament\Admin\Resources\Rombels\RombelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRombel extends EditRecord
{
    protected static string $resource = RombelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
