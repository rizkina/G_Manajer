<?php

namespace App\Filament\Admin\Resources\Tingkats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TingkatForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_tingkat')
                    ->required(),
            ]);
    }
}
