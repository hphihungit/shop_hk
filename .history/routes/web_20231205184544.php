<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\ForgetPassword;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\LinkedinController;
use App\Http\Controllers\Admin\Users\RegisterController;
use App\Http\Controllers\CartController;

Route::get('admin/users/login', [LoginController::class, 'index'])->name('login');
Route::get('admin/users/resetpassword', [LoginController::class, 'ressetPassword']);
Route::post('admin/users/login/store', [LoginController::class, 'store']);

Route::get('admin/users/register', [RegisterController::class, 'index'])->name('register');
Route::post('admin/users/register/store', [RegisterController::class, 'store']);

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        // //
        // Route::get('/', [AuthenController::class, 'checkUser']);
        Route::get('main', [MainController::class, 'indexAdmin'])->name('admin');

        Route::prefix('accounts')->group(function () {
            Route::get('list', [AccountController::class, 'show']);
            Route::get('edit{menu}', [AccountController::class, 'edit']);
        });

        #Menus
        Route::prefix('menus')->group(function () {
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });

        #Product
        Route::prefix('products')->group(function () {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
        });
        #Slider
        Route::prefix('sliders')->group(function () {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);
        });

        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);
        #CART
        Route::get('customers', [\App\Http\Controllers\Admin\CartController::class, 'index']);
        Route::get('customers/view/{customer}', [\App\Http\Controllers\Admin\CartController::class, 'show']);
    });
});

// Route::get('/', [AuthenController::class, 'checkUser']);
// Route::middleware(['auth', 'checkUserRole:2'])->group(function () {
// });

Route::middleware(['auth', 'checkUserRole:2'])->group(function () {
    Route::get('/', [MainController::class, 'indexUser'])->name('home');
});

Route::get('auth/linkedin', [LinkedinController::class, 'redirectToLinkedin'])->name('login.linkedin');
Route::get('auth/linkedin/callback', [LinkedinController::class, 'handleLinkedinCallback']);

//Search
Route::get('/search', [App\Http\Controllers\ProductController::class, 'search']);

Route::post('/services/load-product', [App\Http\Controllers\Admin\MainController::class, 'loadProduct']);

Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class, 'index']);
Route::get('san-pham/{id}-{slug}.html', [App\Http\Controllers\ProductController::class, 'index']);
//CART 
Route::post('add-cart', [App\Http\Controllers\CartController::class, 'index']);
Route::get('carts', [App\Http\Controllers\CartController::class, 'show']);
Route::post('update-cart', [App\Http\Controllers\CartController::class, 'update']);
Route::get('carts/delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::post('carts', [App\Http\Controllers\CartController::class, 'addCart']);
Route::get('thank', [App\Http\Controllers\CartController::class, 'show2']);
//Payment
Route::post('vnpay-payment', [App\Http\Controllers\CartController::class, 'payment_vnpay'])
    ->name("payment");
Route::post('momo-payment', [App\Http\Controllers\CartController::class, 'payment_momo'])
    ->name("payment");


// ResetPassword
Route::get('forget-password', [ForgetPassword::class, 'forgetPassword'])
    ->name("forget.password");

Route::post('forget-password', [ForgetPassword::class, 'forgetPasswordPost'])
    ->name("forget.passwordpost");

Route::get('/reset-password/{token}', [ForgetPassword::class, 'resetPassword'])
    ->name("reset.password");

Route::post('reset-password', [ForgetPassword::class, 'resetPasswordPost'])
    ->name("reset.passwordpost");
