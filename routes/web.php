<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\MyPropertyController;
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

    // User
    Route::get('/my-profile', [UserController::class, 'myProfile'])->name('my-profile');
    Route::post('/my-profile', [UserController::class, 'updateProfile'])->name('my-profile.update');
    Route::post('/update-password', [UserController::class, 'updatePassword'])->name('my-profile.update-password');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');


    // Property Sale
    Route::get('/property/sales', [SaleController::class, 'index'])->name('sale.list');
    Route::get('/property/sale/create', [SaleController::class, 'create'])->name('sale.create');
    Route::post('/property/sale/store', [SaleController::class, 'store'])->name('sale.store');
    Route::post('/property/sale/update', [SaleController::class, 'update'])->name('sale.update');
    Route::get('/property/sale/delete/{id}', [SaleController::class, 'delete'])->name('sale.delete');
    Route::get('/property/sale/hot', [SaleController::class, 'hotProducts'])->name('sale.hot');
    Route::get('/property/sale/{id}', [SaleController::class, 'edit'])->name('sale.edit');

    // My Property
    Route::get('/my-properties', [MyPropertyController::class, 'myProperties'])->name('my-properties');
    Route::get('/my-properties/create', [MyPropertyController::class, 'create'])->name('my-properties.create');
    Route::post('/my-properties/store', [MyPropertyController::class, 'store'])->name('my-properties.store');
    Route::get('/my-properties/show/{id}', [MyPropertyController::class, 'show'])->name('my-properties.show');
    Route::get('/my-properties/edit/{id}', [MyPropertyController::class, 'edit'])->name('my-properties.edit');
    Route::post('/my-properties/edit/{id}', [MyPropertyController::class, 'update'])->name('my-properties.update');
    Route::delete('/my-properties/image/{id}/delete', [MyPropertyController::class, 'deleteImage'])->name('my-properties.image.delete');
    Route::delete('/my-properties/{id}/video/delete', [MyPropertyController::class, 'deleteVideo'])->name('my-properties.video.delete');
    Route::get('/my-properties/search', [MyPropertyController::class, 'search'])->name('my-properties.search');
    Route::get('/my-properties/{id}/delete', [MyPropertyController::class, 'delete'])->name('my-properties.delete');

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

    // Accounts Administration
    Route::group([
        'prefix' => 'accounts'
    ], function(){
        Route::get('/', [UserController::class, 'index'])->name('accounts.index');
        Route::get('/create', [UserController::class, 'create'])->name('accounts.create');
        Route::post('/store', [UserController::class, 'store'])->name('accounts.store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('accounts.edit');
        Route::post('/update', [UserController::class, 'update'])->name('accounts.update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('accounts.delete');
    });

});

// Client
// Route::get('/home-1', [ClientController::class, 'index'])->name('home-1');
Route::get('/', [ClientController::class, 'homePage'])->name('home');
Route::get('/dat-ban', [ClientController::class, 'saleLands'])->name('sale.lands');
Route::get('/nha-ban', [ClientController::class, 'saleHouse'])->name('sale.house');
Route::get('/bat-dong-san/{slug}', [ClientController::class, 'showProperty'])->name('show.property');
Route::get('/tim-kiem', [ClientController::class, 'searchProperty'])->name('search.property');
Route::get('/theo-doi', [ClientController::class, 'watchingProperties'])->name('watching.properties');

