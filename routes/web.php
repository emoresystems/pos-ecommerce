<?php

use Illuminate\Support\Facades\Route;

// pos
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\pos\cart\CartController;
use App\Http\Controllers\pos\DashboardController;
use App\Http\Controllers\pos\orders\OrderController;
use App\Http\Controllers\pos\perfumes\PerfumeController;
use App\Http\Controllers\pos\customers\CustomerController;
use App\Http\Controllers\pos\suppliers\SupplierController;
use App\Http\Controllers\pos\categories\CategoryController;


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
Route::get('/perfumes', function () {
    return view('website.perfumes');
});
Route::get('/about', function () {
    return view('website.about');
});
Route::get('/contact', function () {
    return view('website.contact');
});



Route::prefix('pos')->group(function () {

    Route::resource('dashboard', DashboardController::class);

    Route::resource('perfumes', PerfumeController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('suppliers', SupplierController::class);

    Route::resource('customers', CustomerController::class);

    Route::resource('orders', OrderController::class);
    Route::post('/orders/invoice', [OrderController::class, 'storeInvoice'])->name('orders.invoice');
    Route::get('/orders/{order}/invoice', [OrderController::class, 'showInvoice'])->name('orders.showInvoice');
    //filtered orders
    Route::get('orders/status/pending', [OrderController::class, 'pending'])->name('orders.pending');
    Route::get('orders/status/completed', [OrderController::class, 'completed'])->name('orders.completed');
    Route::patch('/orders/{order}/complete', [OrderController::class, 'markComplete'])->name('orders.complete');
    Route::patch('/orders/{order}/cancel', [OrderController::class, 'markCancelled'])->name('orders.cancel');
});


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
