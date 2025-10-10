<?php

namespace App\Filament\Admin\Resources\Rombels\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RombelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_rombel')
                    ->required()
                    ->maxLength(255),
                Select::make('tingkat_id')
                    ->relationship('tingkat', 'nama_tingkat')
                    ->required()
                    ->preload(),
                Select::make('program_jurusan_id')
                    ->relationship('programJurusan', 'nama_program_jurusan')
                    ->required()
                    ->preload(),
                Select::make('kurikulum_id')
                    ->relationship('kurikulum', 'nama_kurikulum')
                    ->required()
                    ->preload(),
            ]);
    }
}
