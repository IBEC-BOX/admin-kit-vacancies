<?php

namespace AdminKit\Vacancies;

use AdminKit\Vacancies\Commands\VacanciesCommand;
use AdminKit\Vacancies\Providers\FilamentServiceProvider;
use AdminKit\Vacancies\Providers\RouteServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VacanciesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-vacancies')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admin_kit_vacancies_table')
            ->hasCommand(VacanciesCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(FilamentServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
