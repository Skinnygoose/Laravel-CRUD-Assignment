<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    'cars/trash/{id}',
    [CarController::class, 'trash']
)->name('cars.trash')->middleware(['auth', 'verified']);

Route::get(
    'cars/trashed/',
    [CarController::class, 'trashed']
)->name('cars.trashed')->middleware(['auth', 'verified']);

Route::get(
    'cars/restore/{id}',
    [CarController::class, 'trash']
)->name('cars.restore')->middleware(['auth', 'verified']);

Route::resource('cars', CarController::class)->middleware(['auth', 'verified']);








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
