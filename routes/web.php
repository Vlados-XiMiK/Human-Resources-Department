<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    Route::post('/','CreateContactController') -> name('main.store');

});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware'=> ['auth','admin', 'verified']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/','IndexController') -> name('admin.main.index');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'post'], function () {
        Route::get('/create','CreateController') -> name('admin.post.create');
        Route::post('/','StoreController') -> name('admin.post.store');
        Route::get('/{post}','ShowController') -> name('admin.post.show');
        Route::get('/{post}/edit','EditController') -> name('admin.post.edit');
        Route::patch('/{post}','UpdateController') -> name('admin.post.update');
        Route::delete('/{post}','DeleteController') -> name('admin.post.delete');
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

    Route::group(['namespace' => 'Job', 'prefix' => 'job'], function () {
        Route::get('/create','CreateController') -> name('admin.job.create');
        Route::post('/','StoreController') -> name('admin.job.store');
        Route::get('/{job}','ShowController') -> name('admin.job.show');
        Route::get('/{job}/edit','EditController') -> name('admin.job.edit');
        Route::patch('/{job}','UpdateController') -> name('admin.job.update');
        Route::delete('/{job}','DeleteController') -> name('admin.job.delete');
    });

    Route::group(['namespace' => 'Vacancy', 'prefix' => 'vacancy'], function () {
        Route::get('/','IndexController') -> name('admin.Vacancy.index');
        Route::get('/create','CreateCategoryController') -> name('admin.Vacancy.categories.create');
        Route::post('/','StoreCategoryController') -> name('admin.Vacancy.categories.store');
        Route::get('/{category_job}','ShowCategoryController') -> name('admin.Vacancy.categories.show');
        Route::get('/{category_job}/edit','EditCategoryController') -> name('admin.Vacancy.categories.edit');
        Route::patch('/{category_job}','UpdateCategoryController') -> name('admin.Vacancy.categories.update');
        Route::delete('/{category_job}','DeleteCategoryController') -> name('admin.Vacancy.categories.delete');
    });

    Route::group(['namespace' => 'Contact', 'prefix' => 'contact'], function () {
        Route::get('/','IndexController') -> name('admin.Contact.index');
        Route::get('/{contact}','ShowController') -> name('admin.Contact.show');
        Route::delete('/{contact}','DeleteController') -> name('admin.Contact.delete');

    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/','IndexController') -> name('admin.user.index');
        Route::get('/create','CreateController') -> name('admin.user.create');
        Route::post('/','StoreController') -> name('admin.user.store');
        Route::get('/{user}','ShowController') -> name('admin.user.show');
        Route::get('/{user}/edit','EditController') -> name('admin.user.edit');
        Route::patch('/{user}','UpdateController') -> name('admin.user.update');
        Route::delete('/{user}','DeleteController') -> name('admin.user.delete');
    });
});






Auth::routes(['verify' => true]);

Route::get('/home', function () {
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->role == User::ROLE_ADMIN) {
            return redirect()->route('admin.main.index');
        }
    }

    $homeController = new HomeController();
    return $homeController->index();
})->name('home');

