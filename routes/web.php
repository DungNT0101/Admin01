<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\PropertyController;
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

    // User
    Route::get('/my-profile', [UserController::class, 'myProfile'])->name('my-profile');
    Route::post('/my-profile', [UserController::class, 'updateProfile'])->name('my-profile.update');
    Route::post('/update-password', [UserController::class, 'updatePassword'])->name('my-profile.update-password');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');


    // Property
    Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create');
    Route::post('/property/store', [PropertyController::class, 'store'])->name('property.store');
    Route::get('/properties', [PropertyController::class, 'index'])->name('properties.list');
    Route::post('/property/update', [PropertyController::class, 'update'])->name('property.update');
    Route::get('/property/delete/{id}', [PropertyController::class, 'delete'])->name('property.delete');
    Route::get('/property/hot', [PropertyController::class, 'hotProducts'])->name('property.hot');
    Route::get('/property/{id}', [PropertyController::class, 'edit'])->name('property.edit');

    // News
    Route::get('/news', [NewsController::class, 'getNews'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'createNews'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'storeNews'])->name('news.store');
    Route::get('/news/edit/{id}', [NewsController::class, 'editNews'])->name('news.edit');
    Route::post('/news/update', [NewsController::class, 'updateNews'])->name('news.update');
    Route::get('/news/delete/{id}', [NewsController::class, 'deleteNews'])->name('news.delete');

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

