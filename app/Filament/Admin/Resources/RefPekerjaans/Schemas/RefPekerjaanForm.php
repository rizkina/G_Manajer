<?php

namespace App\Filament\Admin\Resources\RefPekerjaans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RefPekerjaanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_pekerjaan')
                    ->required(),
                TextInput::make('nama_pekerjaan')
                    ->required(),
            ]);
    }
}
