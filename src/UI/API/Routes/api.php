<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Vacancies\UI\API\Controllers\VacancyController;

Route::get('/vacancies', [VacancyController::class, 'index']);
Route::get('/vacancies/{id}', [VacancyController::class, 'show']);
