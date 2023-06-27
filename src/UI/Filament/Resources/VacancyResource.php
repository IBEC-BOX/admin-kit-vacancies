<?php

namespace AdminKit\Vacancies\UI\Filament\Resources;

use Filament\Forms;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use AdminKit\Vacancies\Models\Vacancy;
use AdminKit\Vacancies\UI\Filament\Resources\VacancyResource\Pages;

class VacancyResource extends Resource
{
    use Translatable;

    protected static ?string $model = Vacancy::class;

    protected static ?string $navigationIcon = 'heroicon-o-x';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('title'),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListVacancy::route('/'),
            'create' => Pages\CreateVacancy::route('/create'),
            'edit' => Pages\EditVacancy::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return config('admin-kit.locales');
    }
}
