<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;

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



Route::prefix('/medicines')->group(function(){
    Route::get('/', [MedicineController::class, 'index'])->name('medicines-index');
    Route::get('/create', [MedicineController::class, 'create'])->name('medicines-create');
    Route::post('/', [MedicineController::class, 'store'])->name('medicines-store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
