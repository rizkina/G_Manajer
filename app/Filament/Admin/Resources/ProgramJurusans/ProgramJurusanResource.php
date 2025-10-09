<?php

namespace App\Filament\Admin\Resources\ProgramJurusans;

use App\Filament\Admin\Resources\ProgramJurusans\Pages\CreateProgramJurusan;
use App\Filament\Admin\Resources\ProgramJurusans\Pages\EditProgramJurusan;
use App\Filament\Admin\Resources\ProgramJurusans\Pages\ListProgramJurusans;
use App\Filament\Admin\Resources\ProgramJurusans\Schemas\ProgramJurusanForm;
use App\Filament\Admin\Resources\ProgramJurusans\Tables\ProgramJurusansTable;
use App\Models\ProgramJurusan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ProgramJurusanResource extends Resource
{
    protected static ?string $model = ProgramJurusan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::CheckBadge;

    protected static string|UnitEnum|null $navigationGroup = 'Period';

    protected static ?string $recordTitleAttribute = 'nama_program_jurusan';

    public static function form(Schema $schema): Schema
    {
        return ProgramJurusanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ProgramJurusansTable::configure($table);
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
            'index' => ListProgramJurusans::route('/'),
            'create' => CreateProgramJurusan::route('/create'),
            'edit' => EditProgramJurusan::route('/{record}/edit'),
        ];
    }
}
