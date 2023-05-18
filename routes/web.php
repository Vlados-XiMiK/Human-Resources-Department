<?php

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

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/','IndexController');
});

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/about','AboutPageController');
});

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/job','JobPageController');
});

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/contact','ContactPageController');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/','IndexController') -> name('admin.main.index');
    });
    Route::group(['namespace' => 'About_us', 'prefix' => 'about_us'], function () {
        Route::get('/','IndexController') -> name('admin.About_us.index');
        Route::get('/create','CreateCategoryController') -> name('admin.About_us.categories.create');
        Route::post('/','StoreCategoryController') -> name('admin.About_us.categories.store');
        Route::get('/{category}','ShowCategoryController') -> name('admin.About_us.categories.show');
        Route::get('/{category}/edit','EditCategoryController') -> name('admin.About_us.categories.edit');
        Route::patch('/{category}','UpdateCategoryController') -> name('admin.About_us.categories.update');
        Route::delete('/{category}','DeleteCategoryController') -> name('admin.About_us.categories.delete');
    });
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
