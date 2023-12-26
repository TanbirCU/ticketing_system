<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController; 

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

Route::get('/',[BusController::class, 'index'])->name('bus');

Route::post('/add_schedule',[BusController::class, 'addSchedule'])->name('add_schedule');
Route::get('/check-seat-availability', [BusController::class, 'checkSeatAvailability'])->name('checkSeatAvailability');




