<?php

namespace App\Filament\Resources\RefAgamas;

use App\Filament\Resources\RefAgamas\Pages\CreateRefAgama;
use App\Filament\Resources\RefAgamas\Pages\EditRefAgama;
use App\Filament\Resources\RefAgamas\Pages\ListRefAgamas;
use App\Filament\Resources\RefAgamas\Schemas\RefAgamaForm;
use App\Filament\Resources\RefAgamas\Tables\RefAgamasTable;
use App\Models\RefAgama;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RefAgamaResource extends Resource
{
    protected static ?string $model = RefAgama::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_agama';

    public static function form(Schema $schema): Schema
    {
        return RefAgamaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RefAgamasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRefAgamas::route('/'),
            'create' => CreateRefAgama::route('/create'),
            'edit' => EditRefAgama::route('/{record}/edit'),
        ];
    }
}
