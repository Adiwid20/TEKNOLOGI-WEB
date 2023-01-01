<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Comunity_wisataController;
use App\Http\Controllers\MarketController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/nuduk', function () {
    return view('nuduk');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::get('/home', function () {
//     return view('home');
// })
//     // ->middleware(['auth', 'verified'])
// ->name('home');

// Route::get('/about', function () {
//     return view('about');
// })
//     // ->middleware(['auth', 'verified'])
//     ->name('about');

// Route::get('/service', function () {
//     return view('service');
// })
//     // ->middleware(['auth', 'verified'])
//     ->name('service');

// Route::get('/package', function () {
//     return view('package');
// })
//     // ->middleware(['auth', 'verified'])
//     ->name('package');

// Route::get('/article', function () {
//     return view('article');
// })
//     // ->middleware(['auth', 'verified'])
//     ->name('article');

// // Route::get('/tampill_wisata', [StoreController::class, 'tampil_wisatas'])->name('tampil_wisata');

// Route::get('/test', function () {
//     return view('test');
// })
//     // ->middleware(['auth', 'verified'])
//     ->name('test');



//     Route::get('/checkout', function () {
//         return view('checkout');
//     })
//         // ->middleware(['auth', 'verified'])
//         ->name('checkout');

// // Route::get('/list', function () {
// //     return view('admin.list');
// // })
// //     ->middleware(['auth', 'verified'])
// //     ->name('list');

// Route::get('/coba', function () {
//     return view('coba');
// })
//     // ->middleware(['auth', 'verified'])
//     ->name('coba');

// Route::get('/booking', function () {
//     return view('chart.list-cart');
// })
//     ->middleware(['auth', 'verified'])
//     ->name('booking');

// Route::get('/detail_package', function () {
//     return view('detail_package');
// })
//     ->middleware(['auth', 'verified'])
//     ->name('detail_package');


// Route::get('/booking', [StoreController::class,'index'])->name('booking');
// Route::get('/home',             [HomeController::class, 'landingpage'])->middleware(['auth', 'verified'])->name('home');
// Route::get('/about',            [HomeController::class, 'about'])->middleware(['auth', 'verified'])->name('about');
// Route::get('/service',          [HomeController::class, 'service'])->middleware(['auth', 'verified'])->name('service');
// Route::get('/package',          [PackageController::class, 'index'])->middleware(['auth', 'verified'])->name('package');
// Route::get('/list-cart',        [HomeController::class, 'cart'])->middleware(['auth', 'verified'])->name('booking');
// Route::get('/detail_package',   [PackageController::class, 'package'])->middleware(['auth', 'verified'])->name('detail_package');
// Route::get('/favorit',          [HomeController::class, 'favorit'])->middleware(['auth', 'verified'])->name('favorit');
// Route::post('/upload',          [HomeController::class, 'upload'])->middleware(['auth', 'verified'])->name('upload');
// Route::post('/store/package',   [HomeController::class, 'storePackage'])->middleware(['auth', 'verified'])->name('upload');

// HOME
Route::get('/', [HomeController::class, 'landingpage'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/list-cart', [HomeController::class, 'booking'])->name('booking');
Route::get('/favorit', [HomeController::class, 'favorit'])->middleware(['auth', 'verified'])->name('favorit');

// PACKAGE
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/preview', [PackageController::class, 'preview'])->name('preview');
Route::get('/preview_package/{id}', [PackageController::class, 'pre1'])->name('preview_package');
// Route::get('/preview_package', [PackageController::class, 'pre2'])->name('preview_package');
// Route::get('/preview_package', [PackageController::class, 'pre3'])->name('preview_package');
// Route::get('/preview_package', [PackageController::class, 'pre4'])->name('preview_package');

// COMMUNITY
// Route::get('/guide', [Comunity_wisataController::class, 'guide'])->name('guide');

// Store
Route::get('/cart-book', [MarketController::class,'cart'])->name('booked');
Route::get('/checkout', [MarketController::class,'checkout'])->name('checkout');


// ADMIN
// Route::post('/upload', [AdminController::class, 'upload'])->name('add');
// Route::post('/store/package', [AdminController::class, 'storePackage'])->name('upload');
Route::middleware('auth')->group(function () {
Route::get('/admin/table', [AdminController::class,'table'])->name('table');
Route::get('/order', [AdminController::class,'order'])->name('order');
Route::get('/komunitas', [AdminController::class, 'dashboard'])->name('komunitas');
Route::get('/admin/table/create', [AdminController::class,'create'])->name('create');
Route::post('/admin/table/store', [AdminController::class,'store'])->name('store');
Route::get('/admin/table/edit/{id}', [AdminController::class,'edit'])->name('edit');
Route::post('/admin/table/update/{id}', [AdminController::class,'update'])->name('update');
Route::get('/admin/table/destroy/{id}', [AdminController::class,'destroy'])->name('destroy');
});

// COMMUNITY
Route::get('/comunity/card', [Comunity_wisataController::class,'comunity'])->name('card-comunity');
Route::get('/comunity/list', [Comunity_wisataController::class,'comu'])->name('comu-list');
Route::get('/comunity/list/create', [Comunity_wisataController::class,'create'])->name('comu-create');
Route::get('/comunity/list/update', [Comunity_wisataController::class,'update'])->name('comu-update');
Route::get('/comunity/list/edit', [Comunity_wisataController::class,'edit'])->name('comu-edit');
Route::get('/comunity/list/destroy', [Comunity_wisataController::class,'destroy'])->name('comu-destroy');





// Route::get('/favorit', [HomeController::class, 'index'])->name('favorit');




// Route::resource('admin', AdminController::class)
//         ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile',      [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',    [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',   [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
