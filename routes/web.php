<?php

use Illuminate\Support\Facades\Route;
// routes/web.php  
use App\Http\Controllers\IndicatorsController;  

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

Route::get('/indicators', [IndicatorsController::class, 'index'])->name('indicators.index');
Route::get('/indicators/create', [IndicatorsController::class, 'create'])->name('indicators.create');
Route::post('/indicators', [IndicatorsController::class, 'store'])->name('indicators.store');
Route::get('/indicators/{indicator}', [IndicatorsController::class, 'show'])->name('indicators.show');
Route::get('/indicators/{indicator}/edit', [IndicatorsController::class, 'edit'])->name('indicators.edit');
Route::put('/indicators/{indicator}', [IndicatorsController::class, 'update'])->name('indicators.update');
Route::delete('/indicators/{indicator}', [IndicatorsController::class, 'destroy'])->name('indicators.destroy');