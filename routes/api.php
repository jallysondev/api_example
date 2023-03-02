<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DogController;

Route::get('dogs', [DogController::class, 'index']);

Route::get('dog/{id}', [DogController::class, 'show']);

Route::post('dog', [DogController::class, 'store']);

Route::put('dog/{id}', [DogController::class, 'update']);

Route::delete('dog/{id}', [DogController::class, 'destroy']);


