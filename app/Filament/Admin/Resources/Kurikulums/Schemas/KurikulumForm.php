<?php

namespace App\Filament\Admin\Resources\Kurikulums\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KurikulumForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_kurikulum')
                    ->required(),
                TextInput::make('nama_kurikulum')
                    ->required(),
            ]);
    }
}
