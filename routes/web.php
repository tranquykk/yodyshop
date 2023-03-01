<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\yody\YodyIndexController;
use App\Http\Controllers\yody\YodyCartController;
use App\Http\Controllers\yody\YodyAuthController;
use App\Http\Controllers\yody\YodyShopSystemController;
use App\Http\Controllers\yody\YodyCategoryController;
use App\Http\Controllers\yody\YodyListProductController;
use App\Http\Controllers\yody\YodyProductDetailController;
use App\Http\Controllers\yody\YodyPayController;
use App\Http\Controllers\yody\YodyClassifyController;
use App\Http\Controllers\yody\YodyGroupController;
use App\Http\Controllers\yody\YodySearchController;
use App\Http\Controllers\yody\YodyCheckoutController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\yody\YodyAccountController;

use App\Http\Controllers\admin\AdminIndexController;
use App\Http\Controllers\admin\AdminCatController;
use App\Http\Controllers\admin\AdminClassifyController;
use App\Http\Controllers\admin\AdminGroupController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\admin\AdminPictureController;
use App\Http\Controllers\admin\AdminContactController;
use App\Http\Controllers\admin\AdminIntroController;
use App\Http\Controllers\admin\AdminRatingController;
use App\Http\Controllers\Auth\AuthController;

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

$router->pattern('slug', '(.*)');
$router->pattern('id', '[0-9]*');

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function() {
    Route::get('/', [YodyIndexController::class, 'index'])->name('yody.index');
    Route::get('/search', [YodySearchController::class, 'getSearch'])->name('yody.search');
    Route::get('/nhom-san-pham/{slug}-{id}', [YodyClassifyController::class, 'classify'])->name('yody.classify');
    Route::get('/loai-san-pham/{slug}-{id}', [YodyGroupController::class, 'group'])->name('yody.group');
    Route::get('/{slug}-{id}', [YodyCategoryController::class, 'category'])->name('yody.category');
    Route::get('/product-order/{id}', [YodyClassifyController::class, 'order'])->name('yody.order');
    Route::get('/{slug}-{id}.html', [YodyProductDetailController::class, 'detail'])->name('yody.detail');
    Route::get('/add-rating/{id}', [YodyProductDetailController::class, 'addRating'])->name('yody.addRating');
    Route::get('/add-comment/{id}', [YodyProductDetailController::class, 'addComment'])->name('yody.addComment');
    Route::get('/cart', [YodyCartController::class, 'cart'])->name('yody.cart');
    Route::get('/add-cart/{id}', [YodyCartController::class, 'addCart'])->name('yody.addCart');
    Route::get('/del-cart', [YodyCartController::class, 'delCart'])->name('yody.addCart');
    Route::get('/reset-cart', [YodyCartController::class, 'resetCart'])->name('yody.resetCart');
    Route::get('/count-cart', [YodyCartController::class, 'countCart'])->name('yody.countCart');
    Route::get('/pay', [YodyPayController::class, 'pay'])->name('yody.pay');
    Route::get('/district', [YodyPayController::class, 'getDistrict']);
    Route::get('/ward', [YodyPayController::class, 'getWard']);
    Route::post('/pay', [YodyPayController::class, 'postOrder'])->name('yody.pay');
    Route::get('/checkout', [YodyCheckoutController::class, 'checkout'])->name('yody.checkout');

    Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
    Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
    Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
    Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

    Route::get('/he-thong-cua-hang', [YodyShopSystemController::class, 'shopSystem'])->name('yody.shopSystem');
    // Route::prefix('/auth')->group(function() {
        Route::get('/register', [YodyAuthController::class, 'register'])->name('yody.auth.register');
        Route::post('/register', [YodyAuthController::class, 'postRegister'])->name('yody.auth.postRegister');
        Route::get('/login', [YodyAuthController::class, 'login'])->name('yody.auth.login');
        Route::post('/login', [YodyAuthController::class, 'postLogin'])->name('yody.auth.postLogin');
        Route::get('/logout', [YodyAuthController::class, 'logout'])->name('yody.auth.logout');
        Route::get('/account', [YodyAccountController::class, 'account'])->name('yody.auth.account');
        Route::post('/account', [YodyAccountController::class, 'editInfo'])->name('yody.auth.editInfo');
    // });
});

Route::prefix('/admin')->middleware('auth')->group(function() {
    //Trang chủ
    Route::get('/', [AdminIndexController::class, 'index'])->name('admin.index.index')->middleware('role:admin|mod|user');

    // Trang danh muc
    Route::prefix('/cat')->middleware('role:admin|mod')->group(function() {
        Route::get('/', [AdminCatController::class, 'index'])->name('admin.cat.index');
        Route::get('/add', [AdminCatController::class, 'add'])->name('admin.cat.add');
        Route::post('/add', [AdminCatController::class, 'postAdd'])->name('admin.cat.add');
        Route::get('/edit/{id}', [AdminCatController::class, 'edit'])->name('admin.cat.edit')->middleware('role:admin');
        Route::post('/edit/{id}', [AdminCatController::class, 'postEdit'])->name('admin.cat.edit')->middleware('role:admin');
        // Route::get('/del/{id}', [AdminCatController::class, 'del'])->name('admin.cat.del');
    });

    // Route::prefix('/classify')->group(function() {
    //     Route::get('/', [AdminClassifyController::class, 'index'])->name('admin.classify.index');
    //     Route::get('/add', [AdminClassifyController::class, 'add'])->name('admin.classify.add');
    //     Route::post('/add', [AdminClassifyController::class, 'postAdd'])->name('admin.classify.add');
    //     Route::get('/edit/{id}', [AdminClassifyController::class, 'edit'])->name('admin.classify.edit');
    //     Route::post('/edit/{id}', [AdminClassifyController::class, 'postEdit'])->name('admin.classify.edit');
    //     // Route::get('/del/{id}', [AdminClassifyController::class, 'del'])->name('admin.classify.del');
    // });

    // Route::prefix('/group')->group(function() {
    //     Route::get('/', [AdminGroupController::class, 'index'])->name('admin.group.index');
    //     Route::get('/add', [AdminGroupController::class, 'add'])->name('admin.group.add');
    //     Route::post('/add', [AdminGroupController::class, 'postAdd'])->name('admin.group.add');
    //     Route::get('/edit/{id}', [AdminGroupController::class, 'edit'])->name('admin.group.edit');
    //     Route::post('/edit/{id}', [AdminGroupController::class, 'postEdit'])->name('admin.group.edit');
    //     Route::get('/del/{id}', [AdminGroupController::class, 'del'])->name('admin.group.del');
    // });

    Route::prefix('/product')->group(function() {
        Route::get('/', [AdminProductController::class, 'index'])->name('admin.product.index');
        Route::get('/search', [AdminProductController::class, 'getSearch'])->name('admin.product.search');
        Route::get('/add', [AdminProductController::class, 'add'])->name('admin.product.add');
        Route::post('/add', [AdminProductController::class, 'postAdd'])->name('admin.product.add');
        Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/edit/{id}', [AdminProductController::class, 'postEdit'])->name('admin.product.edit');
        Route::get('/del/{id}', [AdminProductController::class, 'del'])->name('admin.product.del');
        Route::prefix('/picture')->group(function() {
            Route::get('/{id}', [AdminProductController::class, 'picture'])->name('admin.product.picture.index');
            Route::get('/add/{id}', [AdminProductController::class, 'addPicture'])->name('admin.product.picture.add');
            Route::post('/add/{id}', [AdminProductController::class, 'postAddPicture'])->name('admin.product.picture.add');
            Route::get('/edit/{id}', [AdminProductController::class, 'editPicture'])->name('admin.product.picture.edit');
            Route::post('/edit/{id}', [AdminProductController::class, 'postEditPicture'])->name('admin.product.picture.edit');
            Route::get('/del/{id}', [AdminProductController::class, 'delPicture'])->name('admin.product.picture.del');
            Route::get('/del-all/{id}', [AdminProductController::class, 'delAllPicture'])->name('admin.product.picture.delAllPicture');
        });
        Route::prefix('/rating')->group(function() {
            Route::get('/{id}', [AdminProductController::class, 'rating'])->name('admin.product.rating.index');
            Route::get('/del/{id}', [AdminProductController::class, 'delRating'])->name('admin.product.rating.del');
            // Route::get('/del-all/{id}', [AdminProductController::class, 'delAllPicture'])->name('admin.product.picture.delAllPicture');
        });
    });

    Route::prefix('/user')->group(function() {
        Route::get('/', [AdminUserController::class, 'index'])->name('admin.user.index');
        Route::get('/add', [AdminUserController::class, 'add'])->name('admin.user.add')->middleware('role:admin');;
        Route::post('/add', [AdminUserController::class, 'postAdd'])->name('admin.user.add');
        Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
        Route::post('/edit/{id}', [AdminUserController::class, 'postEdit'])->name('admin.user.edit');
        Route::get('/del/{id}', [AdminUserController::class, 'del'])->name('admin.user.del');
    });

    // Route::prefix('/user')->group(function() {
    //     Route::get('/', [AdminUserController::class, 'index'])->name('admin.user.index');
    //     Route::get('/add', [AdminUserController::class, 'add'])->name('admin.user.add');
    //     Route::post('/add', [AdminUserController::class, 'postAdd'])->name('admin.user.add');
    //     Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
    //     Route::post('/edit/{id}', [AdminUserController::class, 'postEdit'])->name('admin.user.edit');
    //     Route::get('/del/{id}', [AdminUserController::class, 'del'])->name('admin.user.del');
    // });

    Route::prefix('/order')->group(function() {
        Route::get('/', [AdminOrderController::class, 'index'])->name('admin.order.index');
        Route::get('/show/{id}', [AdminOrderController::class, 'show'])->name('admin.order.show');
        Route::get('/del/{id}', [AdminOrderController::class, 'del'])->name('admin.order.del');
    });

    Route::prefix('/picture')->group(function() {
        Route::get('/', [AdminPictureController::class, 'index'])->name('admin.picture.index');
        Route::get('/add', [AdminPictureController::class, 'add'])->name('admin.picture.add');
        Route::post('/add', [AdminPictureController::class, 'postAdd'])->name('admin.picture.add');
        Route::get('/edit/{id}', [AdminPictureController::class, 'edit'])->name('admin.picture.edit');
        Route::post('/edit/{id}', [AdminPictureController::class, 'postEdit'])->name('admin.picture.edit');
        Route::get('/del/{id}', [AdminPictureController::class, 'del'])->name('admin.picture.del');
    });

    Route::prefix('/contact')->group(function() {
        Route::get('/', [AdminContactController::class, 'index'])->name('admin.contact.index');
        Route::get('/del/{id}', [AdminContactController::class, 'del'])->name('admin.contact.del');
    });

    Route::prefix('/intro')->group(function() {
        Route::get('/', [AdminIntroController::class, 'index'])->name('admin.intro.index');
        Route::get('/edit/{id}', [AdminIntroController::class, 'edit'])->name('admin.intro.edit');
        Route::post('/edit/{id}', [AdminIntroController::class, 'postEdit'])->name('admin.intro.edit');
    });

    Route::prefix('/rating')->group(function() {
        Route::get('/', [AdminRatingController::class, 'index'])->name('admin.rating.index');
        // Route::get('/', [AdminRatingController::class, 'search'])->name('admin.rating.search');
        Route::get('/del/{id}', [AdminRatingController::class, 'del'])->name('admin.rating.del');
    });

});

Route::prefix('/auth')->group(function() {
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('auth.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
