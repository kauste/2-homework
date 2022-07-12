<?php
use App\Http\Controllers\ColorController;
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

Route::get('/colors/list', [ColorController::class, 'index'])->name('colorsList');

Route::get('/colors/create', [ColorController::class, 'create'])->name('colorsCreate');
Route::post('/colors/create', [ColorController::class, 'store'])->name('colorsStore');
Route::get('/colors/edit/{color}', [ColorController::class, 'edit'])->name('colorsEdit');
Route::put('/colors/edit/{color}', [ColorController::class, 'update'])->name('colorsUpdate');
Route::delete('/colors/delete/{color}', [ColorController::class, 'destroy'])->name('colorsDestroy');