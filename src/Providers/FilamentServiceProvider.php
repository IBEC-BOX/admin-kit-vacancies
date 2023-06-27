<?php

declare(strict_types=1);

namespace AdminKit\Vacancies\Providers;

use AdminKit\Vacancies\UI\Filament\Resources\VacancyResource;
use Filament\PluginServiceProvider;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = 'vacancies';

    protected array $resources = [
        VacancyResource::class,
    ];
}
