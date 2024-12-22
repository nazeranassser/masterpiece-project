<?php

use App\Http\Controllers\ManageAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;

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
    Route::get('/', 'index')->name('index'); // الصفحة الرئيسية
    Route::get('/new-arrivals', 'newArrivals')->name('newArrivals');
    Route::get('/our-products', [ThemeController::class, 'ourProducts'])->name('our.products');
    Route::get('/about', 'about')->name('about'); // صفحة من نحن
    Route::get('/contact', 'contact')->name('contact'); // صفحة تواصل معنا
    
    Route::get('/wishlist', 'wishlist')->name('wishlist'); // صفحة الأمنيات
});
// Contact Us
Route::post('/contact-us', [MessageController::class, 'store'])->name('contact.store');
Route::get('add-to-cart/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('cart', [CartController::class, 'viewCart'])->name('cart.index');
Route::get('remove-from-cart/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/cart/remove/{productId}', [CartController::class, 'removeItemFromCart'])->name('cart.remove');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout.show');
Route::post('/checkout', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');



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
        Route::get('admin-show', [ManageAdminController::class,'index'])->name('admin.index');
        Route::get('admin-create1', [ManageAdminController::class, 'create'])->name('admin.create');
        Route::post('admin-create', [ManageAdminController::class, 'store'])->name('admin.store');
        Route::patch('admins/{id}/toggle-status', [ManageAdminController::class, 'toggleStatus'])->name('admin.toggleStatus');
        Route::get('order-show', [OrderController::class,'index'])->name('order.index');
        Route::get('User', [UserController::class,'index'])->name('user.index');
        Route::delete('User-del/{id}', [UserController::class, 'distroy'])->name('user.delete');
        Route::get('coupons', [CouponController::class, 'index'])->name('coupons.index');
        Route::get('coupons/create', [CouponController::class, 'create'])->name('coupons.create');
        Route::post('coupons', [CouponController::class, 'store'])->name('coupons.store');
        Route::patch('coupons/{id}/toggle-status', [CouponController::class, 'toggleStatus'])->name('coupons.toggleStatus');
     

        
        
    });
});

// User Profile Management
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
