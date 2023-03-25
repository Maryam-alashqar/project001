<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticaleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::prefix('admin')->middleware('auth', 'check_user')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('index');

    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminController::class, 'settings_store'])->name('settings_store');

    Route::resource('profile', ProfileController::class);


    Route::get('categories/trash', [CategoryController::class, 'trash'])->name('categories.trash');
    Route::resource('categories', CategoryController::class);

    Route::get('articales/trash', [ArticaleController::class, 'trash'])->name('articales.trash');
    Route::resource('articales', ArticaleController::class);

    Route::resource('authors', AuthorController::class);

});

Route::name('site.')->group(function () {
    Route::get('/site', [SiteController::class, 'index'])->name('index');
    Route::get('/details/{id}',[SiteController::class, 'details'])->name('details');
    //Route::get('/details/{id}',[SiteController::class, 'comment'])->name('comment');
    Route::get('/about', [SiteController::class, 'about'])->name('about');
    Route::get('/category', [SiteController::class, 'category'])->name('category');
    Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
});

//Auth::routes();



Route::get('/', [HomeController::class, 'index'])->name('selection');

Route::group(['namespace' => 'Auth'], function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'index'])->name('login');

});
Route::get('/register', [RegisterController::class, 'index'])->name('register');
