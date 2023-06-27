<?php

namespace AdminKit\Vacancies\UI\Filament\Resources\VacancyResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Vacancies\UI\Filament\Resources\VacancyResource;

class ListVacancy extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = VacancyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
