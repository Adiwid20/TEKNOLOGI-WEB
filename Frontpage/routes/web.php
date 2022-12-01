<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::get('/home', function () {
    return view('home');
})
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::get('/about', function () {
    return view('about');
})
    ->middleware(['auth', 'verified'])
    ->name('about');

Route::get('/service', function () {
    return view('service');
})
    ->middleware(['auth', 'verified'])
    ->name('service');

Route::get('/product', function () {
    return view('product');
})
    ->middleware(['auth', 'verified'])
    ->name('product');

Route::get('/test', function () {
    return view('test');
})
    ->middleware(['auth', 'verified'])
    ->name('test');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
