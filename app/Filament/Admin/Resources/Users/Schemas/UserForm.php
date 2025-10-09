<?php

namespace App\Filament\Admin\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('username')
                        ->label('NIP / NISN')
                        ->required()
                        ->unique(ignoreRecord: true) // unik, kecuali untuk record yang sedang diedit
                        ->maxLength(255),

                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(255),
                         // --- FIELD BARU: GROUP ---
                    Select::make('group_id')
                        ->relationship('group', 'nama_group')
                        ->required()
                        ->searchable()
                        ->preload(),
                    TextInput::make('password')
                        ->password()
                        ->dehydrateStateUsing(fn ($state) => Hash::make($state)) // Enkripsi password saat disimpan
                        ->dehydrated(fn ($state) => filled($state)) // Hanya proses jika diisi (tidak kosong)
                        ->required(fn (string $context): bool => $context === 'create'), // Wajib diisi hanya saat membuat pengguna baru

                    // --- FIELD PENTING: UNTUK MENGATUR ROLE (PERAN) ---
                    Select::make('roles')
                        ->relationship('roles', 'name')
                        ->multiple()
                        ->preload()
                        ->searchable(),
    //             DateTimePicker::make('email_verified_at'),
    //             TextInput::make('password')
    //                 ->password()
    //                 ->required(),
    //             TextInput::make('username'),
    //             TextInput::make('group_id')
    //                 ->numeric(),
            ]);
    }
    public static function schema(): array
    {
        return [
            TextInput::make('name')
                ->required()
                ->maxLength(255),

            // --- FIELD BARU: USERNAME (NIP/NISN) ---
            TextInput::make('username')
                ->label('NIP / NISN')
                ->required()
                ->unique(ignoreRecord: true) // unik, kecuali untuk record yang sedang diedit
                ->maxLength(255),

            TextInput::make('email')
                ->email()
                ->required()
                ->unique(ignoreRecord: true)
                ->maxLength(255),

            // --- FIELD BARU: GROUP ---
            Select::make('group_id')
                ->relationship('group', 'nama_group')
                ->required()
                ->searchable()
                ->preload(),

            TextInput::make('password')
                ->password()
                ->dehydrateStateUsing(fn ($state) => Hash::make($state)) // Enkripsi password saat disimpan
                ->dehydrated(fn ($state) => filled($state)) // Hanya proses jika diisi (tidak kosong)
                ->required(fn (string $context): bool => $context === 'create'), // Wajib diisi hanya saat membuat pengguna baru

            // --- FIELD PENTING: UNTUK MENGATUR ROLE (PERAN) ---
            Select::make('roles')
                ->relationship('roles', 'name')
                ->multiple()
                ->preload()
                ->searchable(),
        ];
    }

    // // Kode di bawah ini mungkin sudah ada atau belum, sesuaikan saja.
    // // Jika file Anda sebelumnya kosong, gunakan seluruh class ini.
    // public static function configure(Form $form): Form
    // {
    //     return $form->schema(static::schema());
    // }
}
