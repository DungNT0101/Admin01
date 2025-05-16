<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KienThucController;
use App\Http\Controllers\PageController;

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
// Admin
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/admin/login', [UserController::class, 'login'])->name('login');
Route::post('/admin/login', [UserController::class, 'userLogin'])->name('user.login');

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    // Home config
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/', [DashboardController::class, 'update'])->name('dashboard.update');

    // Category
    Route::get('/category/product', [ProductCategoryController::class, 'index'])->name('product.categories');
    Route::post('/category/product/store', [ProductCategoryController::class, 'store'])->name('product.category.store');
    Route::post('/category/product/update', [ProductCategoryController::class, 'update'])->name('product.category.update');
    Route::get('/category/product/delete/{id}', [ProductCategoryController::class, 'delete'])->name('product.category.delete');

    // Product
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::post('/product/update', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/product/hot', [ProductController::class, 'hotProducts'])->name('product.hot');
    Route::get('/product/{id}', [ProductController::class, 'edit'])->name('product.edit');

    // News
    Route::get('/news', [NewsController::class, 'getNews'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'createNews'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'storeNews'])->name('news.store');
    Route::get('/news/edit/{id}', [NewsController::class, 'editNews'])->name('news.edit');
    Route::post('/news/update', [NewsController::class, 'updateNews'])->name('news.update');
    Route::get('/news/delete/{id}', [NewsController::class, 'deleteNews'])->name('news.delete');

    // Kien Thuc
    Route::group([
        'prefix' => 'kien-thuc'
    ], function(){
        Route::get('/', [KienThucController::class, 'index'])->name('kienThuc.index');
        Route::get('/create', [KienThucController::class, 'create'])->name('kienThuc.create');
        Route::post('/store', [KienThucController::class, 'store'])->name('kienThuc.store');
        Route::get('/edit/{id}', [KienThucController::class, 'edit'])->name('kienThuc.edit');
        Route::post('/update', [KienThucController::class, 'update'])->name('kienThuc.update');
        Route::get('/delete/{id}', [KienThucController::class, 'delete'])->name('kienThuc.delete');
    });

    // Pages
    Route::group([
        'prefix' => 'page'
    ], function(){
        Route::get('/', [PageController::class, 'index'])->name('page.index');
        Route::get('/create', [PageController::class, 'create'])->name('page.create');
        Route::post('/store', [PageController::class, 'store'])->name('page.store');
        Route::get('/edit/{id}', [PageController::class, 'edit'])->name('page.edit');
        Route::post('/update', [PageController::class, 'update'])->name('page.update');
        Route::get('/delete/{id}', [PageController::class, 'delete'])->name('page.delete');
        Route::get('/view/{slug}', [PageController::class, 'view'])->name('page.view');
    });

});

// Client
Route::get('/', [ClientController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [ClientController::class, 'introduction'])->name('client.introduction');
Route::get('/khuyen-mai', [ClientController::class, 'khuyenMai'])->name('client.khuyenMai');
Route::get('/lien-he', [ClientController::class, 'contact'])->name('client.contact');

Route::get('/danh-muc/{category}', [ClientController::class, 'category'])->name('client.category');
Route::get('/tin-tuc', [ClientController::class, 'news'])->name('client.news');
Route::get('/kien-thuc', [ClientController::class, 'kienThuc'])->name('client.kienThuc');
Route::get('/san-pham/{product}', [ClientController::class, 'productDetails'])->name('client.productDetails');
Route::get('/tin-tuc/{news}', [ClientController::class, 'newsDetails'])->name('client.newsDetails');
Route::get('/kien-thuc/{kienThuc}', [ClientController::class, 'kienThucDetails'])->name('client.kienThucDetails');
