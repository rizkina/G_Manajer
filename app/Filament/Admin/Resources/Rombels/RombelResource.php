<?php

namespace App\Filament\Admin\Resources\Rombels;

use App\Filament\Admin\Resources\Rombels\Pages\CreateRombel;
use App\Filament\Admin\Resources\Rombels\Pages\EditRombel;
use App\Filament\Admin\Resources\Rombels\Pages\ListRombels;
use App\Filament\Admin\Resources\Rombels\Schemas\RombelForm;
use App\Filament\Admin\Resources\Rombels\Tables\RombelsTable;
use App\Models\Rombel;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RombelResource extends Resource
{
    protected static ?string $model = Rombel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Sparkles;

     protected static string|UnitEnum|null $navigationGroup = 'Period';

    protected static ?string $recordTitleAttribute = 'nama_rombrl';

    public static function form(Schema $schema): Schema
    {
        return RombelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RombelsTable::configure($table);
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
            'index' => ListRombels::route('/'),
            'create' => CreateRombel::route('/create'),
            'edit' => EditRombel::route('/{record}/edit'),
        ];
    }
}
