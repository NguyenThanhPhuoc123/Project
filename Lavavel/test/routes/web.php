<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\HomeController as AdminController;
use App\Http\Controllers\admin\LogController;
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


//  Chạy ra view


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/menu', [HomeController::class, 'menu']);
Route::get('/book', [HomeController::class, 'book']);

// yêu cầu quyền đăng nhập mới vào dc trang thêm sản phẩm
Route::middleware(['auth'])->group(function () {

  Route::prefix('admin')->group(function () {
    Route::get('/product', [AdminController::class, 'Adminproduct']);
    Route::post('/product', [AdminController::class, 'Adminproduct']);
  });
});

Route::get('/home', [AdminController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
  Route::get('/home', [AdminController::class, 'index'])->name('home');
  Route::get('/menu', [AdminController::class, 'menu']);
  Route::get('/book', [AdminController::class, 'book']);
  Route::get('/about', [AdminController::class, 'about']);
  Route::get('detail/{id}', [AdminController::class, 'detail']);

  // //vô trang
  // Route::get('/login', [AdminController::class, 'login']);
  // //gửi
  // Route::post('/login', [LogController::class, 'loginData']);

  // // Route::get('/login/{email}/{pass}', [AdminController::class,'login']);
  // Route::get('/register', [AdminController::class, 'register']);
  // // gửi
  // Route::post('/register', [LogController::class, 'registerData']);
  // Route::get('/password', [AdminController::class, 'password']);

  // Route::get('/product', [AdminController::class, 'Adminproduct']);
  // Route::post('/product', [AdminController::class, 'Adminproduct']);
});

// Login & Register

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login']);
