<?php

namespace App\Filament\Admin\Resources\Rombels\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RombelsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_rombel')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tingkat.nama_tingkat')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('programJurusan.nama_program_jurusan')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('kurikulum.nama_kurikulum')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
