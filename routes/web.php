<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentLogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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
})->middleware('auth');

Route::middleware(['only_guest'])->group(function () {
    //Login
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    //Register
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware(['auth'])->group(function () {

    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin');
    
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');

    Route::get('books', [BookController::class, 'index']);
    Route::get('book-add', [BookController::class, 'add']);
    Route::post('book-add', [BookController::class, 'store']);
    Route::get('book-edit/{slug}', [BookController::class, 'edit']);
    Route::post('book-edit/{slug}', [BookController::class, 'update']);
    Route::get('book-delete/{slug}', [BookController::class, 'delete']);
    Route::get('book-destroy/{slug}', [BookController::class, 'destroy']);
    Route::get('book-deleted', [BookController::class, 'deletedBook']);
    Route::get('book-restore/{slug}', [BookController::class, 'restore']);

});