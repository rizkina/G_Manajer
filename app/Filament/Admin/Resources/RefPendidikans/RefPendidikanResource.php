<?php

namespace App\Filament\Admin\Resources\RefPendidikans;

use App\Filament\Admin\Resources\RefPendidikans\Pages\CreateRefPendidikan;
use App\Filament\Admin\Resources\RefPendidikans\Pages\EditRefPendidikan;
use App\Filament\Admin\Resources\RefPendidikans\Pages\ListRefPendidikans;
use App\Filament\Admin\Resources\RefPendidikans\Schemas\RefPendidikanForm;
use App\Filament\Admin\Resources\RefPendidikans\Tables\RefPendidikansTable;
use App\Models\RefPendidikan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class RefPendidikanResource extends Resource
{
    protected static ?string $model = RefPendidikan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::AcademicCap;

    protected static string|UnitEnum|null $navigationGroup = 'Reference';

    protected static ?string $recordTitleAttribute = 'nama_pendidikan';

     protected static ?string $navigationLabel = 'Pendidikan';

    public static function form(Schema $schema): Schema
    {
        return RefPendidikanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RefPendidikansTable::configure($table);
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
            'index' => ListRefPendidikans::route('/'),
            'create' => CreateRefPendidikan::route('/create'),
            'edit' => EditRefPendidikan::route('/{record}/edit'),
        ];
    }
}
