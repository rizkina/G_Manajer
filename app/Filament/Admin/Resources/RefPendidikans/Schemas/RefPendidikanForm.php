<?php

namespace App\Filament\Admin\Resources\RefPendidikans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RefPendidikanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_pendidikan')
                    ->required(),
                TextInput::make('nama_pendidikan')
                    ->required(),
            ]);
    }
}
