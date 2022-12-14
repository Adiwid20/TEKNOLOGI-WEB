<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\ScoreController;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('statistic', [StatisticController::class, 'index'])->name('statistic');


Route::get('calendar', [CalendarController::class, 'index'])->name('calendar');
Route::get('/latihan', [LatihanController::class, 'index'])->name('latihan');

Route::get('/input', [MathController::class, 'input'])->name('input');
Route::post('/aritmatika', [MathController::class, 'output'])->name('aritmatika');
Route::get('score', [ScoreController::class, 'invalue'])->name('in-value');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
