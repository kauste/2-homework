<?php
use App\Http\Controllers\ColorController;
use App\Http\Controllers\AnimalController;
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
// colors
Route::get('/colors/list', [ColorController::class, 'index'])->name('colorsList');
Route::get('/colors/create', [ColorController::class, 'create'])->name('colorsCreate');
Route::post('/colors/create', [ColorController::class, 'store'])->name('colorsStore');
Route::get('/colors/edit/{color}', [ColorController::class, 'edit'])->name('colorsEdit');
Route::put('/colors/edit/{color}', [ColorController::class, 'update'])->name('colorsUpdate');
Route::delete('/colors/delete/{color}', [ColorController::class, 'destroy'])->name('colorsDestroy');

//animals
Route::get('/animals/list', [AnimalController::class, 'index'])->name('animalsList');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animalsCreate');
Route::post('/animals/create', [AnimalController::class, 'store'])->name('animalsStore');
Route::get('/animals/edit/{animal}', [AnimalController::class, 'edit'])->name('animalsEdit');
Route::put('/animals/edit/{animal}', [AnimalController::class, 'update'])->name('animalsUpdate');
Route::delete('/animals/delete/{animal}', [AnimalController::class, 'destroy'])->name('animalsDestroy');