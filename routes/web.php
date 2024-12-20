<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;


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

Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
   
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/checkout', 'checkout')->middleware('auth')->name('checkout');
    Route::get('/wishlist', 'wishlist')->name('wishlist');
    
});
Route::get('/dash', function () {
    return view('admin.dashboard');
});
Route::post('/contact-us', [MessageController::class, 'store'])->name('contact.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// مسارات المسؤولين
Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('products', ProductController::class)->names([
        'create' => 'admin.products.create',
        'index' => 'admin.products.index',
        'store' => 'admin.products.store',
        'edit' => 'admin.products.edit',
        'update' => 'admin.products.update',
        'show' => 'admin.products.show',
        'destroy' => 'admin.products.destroy',
    ]);
    Route::resource('categories', CategoryController::class)->names([
        'index' => 'admin.categories.index',
        'create' => 'admin.categories.create',
        'store' => 'admin.categories.store',
        'edit' => 'admin.categories.edit',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy',
    ]);
    Route::resource('messages', MessageController::class)->names([
        'index' => 'admin.messages.index',
        'show' => 'admin.messages.show',
        'destroy' => 'admin.messages.destroy',
    ]);
    
    

    Route::get('/orders', [AdminController::class, 'viewOrders'])->name('admin.orders');
    Route::get('/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login']);
});

require __DIR__.'/auth.php';
