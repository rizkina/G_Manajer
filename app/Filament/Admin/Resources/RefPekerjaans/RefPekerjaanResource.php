<?php

namespace App\Filament\Admin\Resources\RefPekerjaans;

use App\Filament\Admin\Resources\RefPekerjaans\Pages\CreateRefPekerjaan;
use App\Filament\Admin\Resources\RefPekerjaans\Pages\EditRefPekerjaan;
use App\Filament\Admin\Resources\RefPekerjaans\Pages\ListRefPekerjaans;
use App\Filament\Admin\Resources\RefPekerjaans\Schemas\RefPekerjaanForm;
use App\Filament\Admin\Resources\RefPekerjaans\Tables\RefPekerjaansTable;
use App\Models\RefPekerjaan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class RefPekerjaanResource extends Resource
{
    protected static ?string $model = RefPekerjaan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static string|UnitEnum|null $navigationGroup = 'Reference';

    protected static ?string $recordTitleAttribute = 'nama_pekerjaan';

    protected static ?string $navigationLabel = 'Pekerjaan';

    public static function form(Schema $schema): Schema
    {
        return RefPekerjaanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RefPekerjaansTable::configure($table);
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
            'index' => ListRefPekerjaans::route('/'),
            'create' => CreateRefPekerjaan::route('/create'),
            'edit' => EditRefPekerjaan::route('/{record}/edit'),
        ];
    }
}
