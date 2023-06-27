<?php

declare(strict_types=1);

namespace AdminKit\Vacancies\Providers;

use Filament\PluginServiceProvider;
use AdminKit\Vacancies\UI\Filament\Resources\VacancyResource;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = 'vacancies';

    protected array $resources = [
        VacancyResource::class,
    ];
}
