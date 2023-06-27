<?php

declare(strict_types=1);

namespace AdminKit\Vacancies\UI\API\Controllers;

use AdminKit\Vacancies\Models\Vacancy;

class VacancyController extends Controller
{
    public function index()
    {
        return Vacancy::all();
    }

    public function show(int $id)
    {
        return Vacancy::findOrFail($id);
    }
}
