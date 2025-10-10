<?php

namespace App\Filament\Admin\Resources\Periods\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PeriodForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tahun_pelajaran')
                ->required()
                ->placeholder('Contoh: 2025/2026')
                ->maxLength(255),

            // --- INI JAWABAN UNTUK PERTANYAAN ANDA ---
            Select::make('semester')
                ->required()
                ->options([
                    'Ganjil' => 'Ganjil',
                    'Genap' => 'Genap',
                ]),
            
            Toggle::make('is_active')
                ->label('Aktifkan Periode Ini')
                ->required(),
            ]);
    }
}
