<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\RentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PhotoRemoveController;


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

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::get('/admin/users/create', [UserController::class, 'create']);
    Route::post('/admin/users/store', [UserController::class, 'store']);
*/

Route::group(['middleware' => 'auth'], function(){

    Route::group([], function(){

        Route::prefix('admin')->name('admin.')->group(function(){

    /*
       Route::prefix('users')->name('users.')->group(function(){

            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/store', [UserController::class, 'store'])->name('store');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
            Route::post('/update/{user}', [UserController::class, 'update'])->name('update');
            Route::get('/{user}/destroy', [UserController::class, 'destroy'])->name('destroy');
        });
    */
            Route::resource('/users',      UserController::class);
            Route::resource('/rents',      RentController::class);
            Route::resource('/books',      BookController::class);
            Route::resource('/categories', CategoryController::class);
            Route::post('/photos/remove', [PhotoRemoveController::class, 'removePhoto'])->name('photos.remove');

        });

    });
});



Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
