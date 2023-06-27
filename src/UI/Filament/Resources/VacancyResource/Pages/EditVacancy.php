<?php

namespace AdminKit\Vacancies\UI\Filament\Resources\VacancyResource\Pages;

use AdminKit\Vacancies\UI\Filament\Resources\VacancyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVacancy extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = VacancyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
