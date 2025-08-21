<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

// pos
use App\Http\Controllers\pos\DashboardController;
use App\Http\Controllers\pos\perfumes\PerfumeController;
use App\Http\Controllers\pos\categories\CategoryController;
use App\Http\Controllers\pos\suppliers\SupplierController;
use App\Http\Controllers\pos\customers\CustomerController;

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
    return view('website.home');
});



Route::prefix('pos')->group(function () {

    Route::resource('dashboard', DashboardController::class);

    Route::resource('perfumes', PerfumeController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('suppliers', SupplierController::class);
    Route::resource('customers', CustomerController::class);
});



use App\Http\Controllers\pos\cart\CartController;

Route::post('/cart/add/{perfume}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{perfume}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
