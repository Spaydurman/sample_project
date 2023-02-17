<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddNewItemController;
use App\Http\Controllers\Auth\LogOutController;
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
Route::get('/main', [MainController::class, 'index'])->name('main');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LogInController::class, 'index'])->name('login');
Route::post('/login', [LogInController::class, 'store']);

Route::get('/logout', [LogOutController::class, 'store'])->name('logout');

//Dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/addnewitem', [AddNewItemController::class, 'index'])->name('addnewitem');
Route::post('/additem', [AddNewItemController::class, 'additem'])->name('additem');

Route::get('/listofitems', [ItemsController::class, 'index'])->name('listofitems');
Route::get('/edititem/{product_id}', [ItemsController::class, 'edit_item'])->name('edititem');
Route::get('/delete_item/{product_id}', [ItemsController::class, 'delete_item'])->name('delete_item');

Route::post('/update_item', [ItemsController::class, 'update_item'])->name('update_item');

Route::get('/', function () {
    return view('welcome');
});
