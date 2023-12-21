<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('beranda');
    Route::get('/biodata', [HomeController::class, 'biodata'])->name('biodata');
});

Route::middleware('auth','level')->group(function () {
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/add', function () {
        return view('products.add');
     });
     Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
        Route::get('', [ProductsController::class, 'index'])->name('index');
        Route::get('/chart', [ProductsController::class, 'chart'])->name('chart');
        Route::get('/chartprice', [ProductsController::class, 'chartprice'])->name('chartprice');
        Route::get('/chartstock', [ProductsController::class, 'chartstock'])->name('chartstock');
      });
      Route::resource('products', ProductsController::class);
});

Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
    Route::get('/chart', [ProductsController::class, 'chart'])->name('chart');
    Route::get('/chartprice', [ProductsController::class, 'chartprice'])->name('chartprice');
    Route::get('/chartstock', [ProductsController::class, 'chartstock'])->name('chartstock');
});





require __DIR__.'/auth.php';
