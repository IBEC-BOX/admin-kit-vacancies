<?php

use AdminKit\Vacancies\UI\API\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/vacancies', [VacancyController::class, 'index']);
Route::get('/vacancies/{id}', [VacancyController::class, 'show']);
