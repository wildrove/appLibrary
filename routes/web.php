<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\RentController;

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
});

/*
    Route::get('/admin/users', [UserController::class, 'index']);
    Route::get('/admin/users/create', [UserController::class, 'create']);
    Route::post('/admin/users/store', [UserController::class, 'store']);
*/

Route::prefix('admin')->namespace('Admin')->group(function(){
    
    Route::prefix('users')->group(function(){

        Route::get('/', [UserController::class, 'index']);
        Route::get('/create', [UserController::class, 'create']);
        Route::post('/store', [UserController::class, 'store']);
    });
});