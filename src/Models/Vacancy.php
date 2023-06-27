<?php

namespace AdminKit\Vacancies\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Vacancies\Database\Factories\VacancyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Vacancy extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_vacancies';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): VacancyFactory
    {
        return new VacancyFactory();
    }
}
