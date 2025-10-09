<?php

namespace App\Filament\Admin\Resources\Kurikulums;

use App\Filament\Admin\Resources\Kurikulums\Pages\CreateKurikulum;
use App\Filament\Admin\Resources\Kurikulums\Pages\EditKurikulum;
use App\Filament\Admin\Resources\Kurikulums\Pages\ListKurikulums;
use App\Filament\Admin\Resources\Kurikulums\Schemas\KurikulumForm;
use App\Filament\Admin\Resources\Kurikulums\Tables\KurikulumsTable;
use App\Models\Kurikulum;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KurikulumResource extends Resource
{
    protected static ?string $model = Kurikulum::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ChartBarSquare;

    protected static string|UnitEnum|null $navigationGroup = 'Period';

    protected static ?string $recordTitleAttribute = 'nama_kurikulum';

    public static function form(Schema $schema): Schema
    {
        return KurikulumForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KurikulumsTable::configure($table);
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
            'index' => ListKurikulums::route('/'),
            'create' => CreateKurikulum::route('/create'),
            'edit' => EditKurikulum::route('/{record}/edit'),
        ];
    }
}
