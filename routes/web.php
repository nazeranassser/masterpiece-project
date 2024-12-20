<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;

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

// Theme Routes
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/checkout', 'checkout')->middleware('auth')->name('checkout');
    Route::get('/wishlist', 'wishlist')->name('wishlist');
});

// Contact Us
Route::post('/contact-us', [MessageController::class, 'store'])->name('contact.store');

// User Authentication Routes
Route::prefix('user')->name('user.')->group(function () {
    Route::get('login', [UserAuthController::class, 'login'])->name('login');
    Route::post('login', [UserAuthController::class, 'handelLogin'])->name('login.submit');
    Route::post('logout', [UserAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:user')->group(function () {
        Route::get('dashboard', function () {
            return view('dashboard'); // تأكد من إنشاء هذا الملف
        })->name('dashboard');
    });
});

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('login', [AdminAuthController::class, 'handelLogin'])->name('login.submit');
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('products', ProductController::class)->names([
            'create' => 'products.create',
            'index' => 'products.index',
            'store' => 'products.store',
            'edit' => 'products.edit',
            'update' => 'products.update',
            'show' => 'products.show',
            'destroy' => 'products.destroy',
        ]);
        Route::resource('categories', CategoryController::class)->names([
            'index' => 'categories.index',
            'create' => 'categories.create',
            'store' => 'categories.store',
            'edit' => 'categories.edit',
            'update' => 'categories.update',
            'destroy' => 'categories.destroy',
        ]);
        Route::resource('messages', MessageController::class)->names([
            'index' => 'messages.index',
            'show' => 'messages.show',
            'destroy' => 'messages.destroy',
        ]);
        Route::get('/orders', [AdminController::class, 'viewOrders'])->name('orders');
        Route::get('/users', [AdminController::class, 'manageUsers'])->name('users');
    });
});

// User Profile Management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
