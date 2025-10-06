<?php

namespace App\Filament\Resources\RefAgamas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RefAgamaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_agama')
                    ->required(),
                TextInput::make('nama_agama')
                    ->required(),
            ]);
    }
}
