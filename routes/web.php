<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotographyController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PhotographyController::class, 'index'])->name('photo.index');

Route::get('/services', function () {
    return view('service');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reservation-location/{type}', [ReservationController::class, 'form_reservation']);