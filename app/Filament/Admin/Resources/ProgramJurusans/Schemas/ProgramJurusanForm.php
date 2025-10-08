<?php

namespace App\Filament\Admin\Resources\ProgramJurusans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProgramJurusanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_program_jurusan')
                    ->required(),
                TextInput::make('nama_program_jurusan')
                    ->required(),
            ]);
    }
}
