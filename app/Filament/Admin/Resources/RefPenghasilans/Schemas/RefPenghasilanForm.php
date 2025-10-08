<?php

namespace App\Filament\Admin\Resources\RefPenghasilans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RefPenghasilanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_penghasilan')
                    ->required(),
                TextInput::make('nama_penghasilan')
                    ->required(),
            ]);
    }
}
