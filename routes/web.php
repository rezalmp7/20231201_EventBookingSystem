<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\EventUserController;
use App\Http\Controllers\BookedUserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/login', [LoginController::class, "index"]);
Route::get('/logout', [LoginController::class, "logout"]);
Route::post('/authentication', [LoginController::class, "authentication"]);

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('user', UsersController::class);
});

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('listEvent', [EventUserController::class, 'index']);
    Route::get('listEvent/{id}', [EventUserController::class, 'book']);
    Route::get('listBooked', [BookedUserController::class, 'index']);
});

Route::middleware(['auth', 'user-access:user|admin'])->group(function () {
    Route::resource('event', EventsController::class);
    Route::resource('profile', ProfileController::class);
});
