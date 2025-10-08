<?php

namespace App\Filament\Admin\Resources\RefPenghasilans\Pages;

use App\Filament\Admin\Resources\RefPenghasilans\RefPenghasilanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRefPenghasilan extends EditRecord
{
    protected static string $resource = RefPenghasilanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
