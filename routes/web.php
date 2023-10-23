<?php

use Illuminate\Support\Facades\Route;

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


//Client routes

//Home
Route::get('/', function () {
    return view('welcome',['event' => \App\Models\Evenement::all()]);
});

//Add Reservation
Route::post('/reserve', [App\Http\Controllers\ClientController::class, 'add']);

//

Auth::routes();

//Dashboard
Route::get('/tableaudebord', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

//Evenement
Route::get('/evenement', [App\Http\Controllers\EvenementController::class, 'index']);

Route::get('/evenement/create', [App\Http\Controllers\EvenementController::class, 'create']);

Route::delete('/evenement/{evenement}', [App\Http\Controllers\EvenementController::class, 'destroy']);

Route::get('/evenement/{evenement}/modifier', [App\Http\Controllers\EvenementController::class, 'getUpdate']);

Route::post('/evenement', [App\Http\Controllers\EvenementController::class, 'add']);

Route::put('/evenement/{evenement}',[App\Http\Controllers\EvenementController::class, 'update']);

//Reservation
Route::get('/reservation/create', function () {
    return view('admin.reservation.creation-reservation', ['evenements' => App\Models\Evenement::all() ]);
});

Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'index']);

Route::delete('/reservation/{reservation}', [App\Http\Controllers\ReservationController::class, 'destroy']);

Route::get('/reservation/{reservation}/modifier', [App\Http\Controllers\ReservationController::class, 'getUpdate']);

Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'add']);

Route::put('/reservation/{reservation}',[App\Http\Controllers\ReservationController::class, 'update']);

//Contact
Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index']);
Route::post('/contact',[App\Http\Controllers\ClientController::class, 'addMessage']);
Route::delete('/contact/{contact}',[App\Http\Controllers\ContactController::class, 'destroy']);
