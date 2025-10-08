<?php

namespace App\Filament\Admin\Resources\Kurikulums\Pages;

use App\Filament\Admin\Resources\Kurikulums\KurikulumResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKurikulum extends EditRecord
{
    protected static string $resource = KurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
