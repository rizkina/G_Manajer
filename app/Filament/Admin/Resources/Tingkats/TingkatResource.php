<?php

namespace App\Filament\Admin\Resources\Tingkats;

use App\Filament\Admin\Resources\Tingkats\Pages\CreateTingkat;
use App\Filament\Admin\Resources\Tingkats\Pages\EditTingkat;
use App\Filament\Admin\Resources\Tingkats\Pages\ListTingkats;
use App\Filament\Admin\Resources\Tingkats\Schemas\TingkatForm;
use App\Filament\Admin\Resources\Tingkats\Tables\TingkatsTable;
use App\Models\Tingkat;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TingkatResource extends Resource
{
    protected static ?string $model = Tingkat::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Square3Stack3d;

    protected static string|UnitEnum|null $navigationGroup = 'Period';

    protected static ?string $recordTitleAttribute = 'nama_tingkat';

    public static function form(Schema $schema): Schema
    {
        return TingkatForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TingkatsTable::configure($table);
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
            'index' => ListTingkats::route('/'),
            'create' => CreateTingkat::route('/create'),
            'edit' => EditTingkat::route('/{record}/edit'),
        ];
    }
}
