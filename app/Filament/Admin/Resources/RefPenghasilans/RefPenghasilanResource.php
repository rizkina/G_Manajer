<?php

namespace App\Filament\Admin\Resources\RefPenghasilans;

use App\Filament\Admin\Resources\RefPenghasilans\Pages\CreateRefPenghasilan;
use App\Filament\Admin\Resources\RefPenghasilans\Pages\EditRefPenghasilan;
use App\Filament\Admin\Resources\RefPenghasilans\Pages\ListRefPenghasilans;
use App\Filament\Admin\Resources\RefPenghasilans\Schemas\RefPenghasilanForm;
use App\Filament\Admin\Resources\RefPenghasilans\Tables\RefPenghasilansTable;
use App\Models\RefPenghasilan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RefPenghasilanResource extends Resource
{
    protected static ?string $model = RefPenghasilan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_penghasilan';

    public static function form(Schema $schema): Schema
    {
        return RefPenghasilanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RefPenghasilansTable::configure($table);
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
            'index' => ListRefPenghasilans::route('/'),
            'create' => CreateRefPenghasilan::route('/create'),
            'edit' => EditRefPenghasilan::route('/{record}/edit'),
        ];
    }
}
