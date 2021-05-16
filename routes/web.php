<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::redirect('/', '/home');
Route::get('/home', [CarController::class, 'index']);
Route::post('/home', [CarController::class, 'search']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/search', [CarController::class, 'liveSearch']);
Route::get('/detail_car/{id}', [CarController::class, 'detailCar']);
Route::get('/type/{type_name}', [TypeController::class, 'index']);

/* ada middleware nya di controller */
Route::get('/form', [FormController::class, 'index']);
Route::post('/form/upload', [FormController::class, 'upload']);

Route::get('/formUser', [FormController::class, 'userIndex'])->middleware('myrole:master');
Route::post('/formUser', [FormController::class, 'insertUser']);

Route::get('/delete/{id}', [CarController::class, 'delete']);

Route::get('/update_car/{id}', [CarController::class, 'updateGet'])->middleware('myauth');
Route::post('/update_car/{id}', [CarController::class, 'updatePost']);

Route::post('/loginAuth', [AuthController::class, 'authLogin'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'authLogout']);

Route::get('/viewUser', [UserController::class, 'index'])->middleware('myrole:master');
Route::get('/deleteUser/{id}', [UserController::class, 'delete'])->middleware('myrole:master');



