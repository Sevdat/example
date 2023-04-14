<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\WTF;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//вызывает метод __invoke при переходе на example.test/vnikuda
Route::get('/', Controller::class);
Route::get('basic-table', [Controller::class, 'basic_table']);
Route::get('profile', [Controller::class, 'profile']);
Route::get('fontawesome', [Controller::class, 'fontawesome']);
Route::get('map-google', [Controller::class, 'map_google']);
Route::get('blank', [Controller::class, 'blank']);
Route::fallback([Controller::class, 'fallback'] );
