<?php

namespace AdminKit\Vacancies\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Vacancies\Vacancies
 */
class Vacancies extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Vacancies\Vacancies::class;
    }
}
