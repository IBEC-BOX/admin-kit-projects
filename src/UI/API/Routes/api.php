<?php

use Illuminate\Support\Facades\Route;
use AdminKit\Projects\UI\API\Controllers\ProjectController;

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
