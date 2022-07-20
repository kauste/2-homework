<?php
use App\Http\Controllers\ColorController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\FrontController;
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
//front
Route::name('front')->group(function(){
    Route::get('/', [FrontController::class, 'index'])->name('Index');
    // Route::get('/{id}', [FrontController::class, 'index'])->name('IndexId');
});


// colors
Route::prefix('colors')->name('colors')->group(function () {
    Route::get('/', [AnimalController::class, 'index']);
    Route::get('/list', [ColorController::class, 'index'])->name('List')->middleware('role:user'); // o jei du, i masyva??
    Route::get('/create', [ColorController::class, 'create'])->name('Create')->middleware('role:admin');
    Route::post('/create', [ColorController::class, 'store'])->name('Store')->middleware('role:admin');
    Route::get('/edit/{color}', [ColorController::class, 'edit'])->name('Edit')->middleware('role:admin');
    Route::put('/edit/{color}', [ColorController::class, 'update'])->name('Update')->middleware('role:admin');
    Route::delete('/delete/{color}', [ColorController::class, 'destroy'])->name('Destroy')->middleware('role:admin');
});
//animals
Route::prefix('animals')->name('animals')->group(function(){
Route::get('/list', [AnimalController::class, 'index'])->name('List')->middleware('role:user');
Route::get('/create', [AnimalController::class, 'create'])->name('Create')->middleware('role:admin');//po dvitaskio-stringas ir ji pasiiimi treciu parametru
Route::post('/create', [AnimalController::class, 'store'])->name('Store')->middleware('role:admin');
Route::get('/edit/{animal}', [AnimalController::class, 'edit'])->name('Edit')->middleware('role:admin');
Route::put('/edit/{animal}', [AnimalController::class, 'update'])->name('Update')->middleware('role:admin');
Route::delete('/delete/{animal}', [AnimalController::class, 'destroy'])->name('Destroy')->middleware('role:admin');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
