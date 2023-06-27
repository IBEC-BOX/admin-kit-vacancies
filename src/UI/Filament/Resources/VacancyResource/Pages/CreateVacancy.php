<?php

namespace AdminKit\Vacancies\UI\Filament\Resources\VacancyResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use AdminKit\Vacancies\UI\Filament\Resources\VacancyResource;

class CreateVacancy extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = VacancyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
