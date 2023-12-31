<?php

use App\Http\Controllers\BestelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\MedewerkersController;
use App\Http\Controllers\IngredientenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MandjeController;
use App\Http\Controllers\BerekenController;



Route::resource('bestel', BestelController::class);
Route::resource('pizza', PizzaController::class);
Route::resource('medewerkers', MedewerkersController::class);
Route::resource('ingredienten', IngredientenController::class);
Route::resource('menu', MenuController::class);
Route::resource('mandje', MandjeController::class);
Route::resource('bereken', BerekenController::class);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
