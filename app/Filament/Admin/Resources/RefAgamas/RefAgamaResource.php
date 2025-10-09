<?php

namespace App\Filament\Admin\Resources\RefAgamas;

use App\Filament\Admin\Resources\RefAgamas\Pages\CreateRefAgama;
use App\Filament\Admin\Resources\RefAgamas\Pages\EditRefAgama;
use App\Filament\Admin\Resources\RefAgamas\Pages\ListRefAgamas;
use App\Filament\Admin\Resources\RefAgamas\Schemas\RefAgamaForm;
use App\Filament\Admin\Resources\RefAgamas\Tables\RefAgamasTable;
use App\Models\RefAgama;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class RefAgamaResource extends Resource
{
    protected static ?string $model = RefAgama::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Star;

    protected static string|UnitEnum|null $navigationGroup = 'Reference';

    protected static ?string $recordTitleAttribute = 'nama_agama';

     protected static ?string $navigationLabel = 'Agama';

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
