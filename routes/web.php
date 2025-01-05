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
use App\Http\Controllers\OurProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProductDetailsController;




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
    Route::get('/products', [ProductController::class, 'ourProducts'])->name('our.products');
    Route::get('/feedback', 'feedback')->name('feedback');

    Route::get('/about', 'about')->name('about'); // صفحة من نحن
    Route::get('/contact', 'contact')->name('contact'); // صفحة تواصل معنا
    
});

Route::post('/contact-us', [MessageController::class, 'store'])->name('contact.store');
Route::get('/ourproducts/{category}', [OurProductController::class, 'showProducts'])->name('theme.ourproducts');
// عرض الصفحة الرئيسية مع قسم الفيدباك




Route::get('/product/{id}', [ProductDetailsController::class, 'show'])->name('product.details');


Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/wishlist/add/{id}', [WishlistController::class, 'add'])->name('wishlist.add');
Route::get('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');
Route::get('/wishlist/clear', [WishlistController::class, 'clear'])->name('wishlist.clear');




Route::prefix('cart')->name('cart.')->group(function () {
    // عرض سلة التسوق
    Route::get('/', [CartController::class, 'viewCart'])->name('index');
    
    // إضافة منتج إلى السلة
    Route::post('add/{productId}', [CartController::class, 'addToCart'])->name('add');
    
    // حذف منتج من السلة
    Route::delete('remove/{id}', [CartController::class, 'removeItemFromCart'])->name('remove');
    
    // تحديث الكمية في السلة
    Route::post('update', [CartController::class, 'updateCart'])->name('update');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::post('/cart/checkout/placeOrder', [CartController::class, 'placeOrder'])->name('cart.placeorder');
});

Route::get('order/success', [CartController::class, 'orderSuccess'])->name('order.success');






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
        Route::patch('/admin/orders/{id}/status', [OrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');
        


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
