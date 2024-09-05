<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/tes', function () {
//     return view('admin/product');
// });

// Route::get('/profile', function () {
//     return view('profile');
// });
Route::get('/ha', function () {
    return view('admin/edit-product');
});
Route::get('/tes', function () {
    return view('transaksi');
});

Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
// admin
Route::group(['middleware' => ['role:admin']], function () {

    // Route khusus admin
    Route::get('/dasad',[AdminController::class,'dasad']);
    Route::get('/dtusers',[AdminController::class,'user']);
    Route::get('/listproduct',[AdminController::class,'product']);
    Route::post('/add/product',[AdminController::class,'add']);
    Route::get('/delete/product/{id}',[AdminController::class,'delete']);
    Route::get('/edit/product/{id}',[AdminController::class,'edit']);
    Route::post('/update/product/{id}',[AdminController::class,'update']);
    Route::get('/banner',[AdminController::class,'banner']);
    Route::post('/add/banner',[AdminController::class,'addbanner']);
    Route::get('/delete/banner/{id}',[AdminController::class,'deletebanner']);

    Route::post('/add/user',[AdminController::class,'adduser']);
    Route::get('/logout',[UserController::class,'logout']);
    Route::get('/delete/user/{id}',[AdminController::class,'deluser']);
    Route::get('/edit/user/{id}',[AdminController::class,'edituser']);
    Route::post('/update/user/{id}',[AdminController::class,'updateuser']);

    Route::get('/delete/transaksi/{id}',[AdminController::class,'deltransaksi']);
    Route::get('/edit/transaksi/{id}',[AdminController::class,'edittransaksi']);
    Route::post('/update/transaksi/{id}',[AdminController::class,'updatetransaksi']);

});

Route::group(['middleware' => ['role:user']], function () {
    // Route khusus user
    Route::get('/user/profile', [UserController::class,'profile']);
    Route::get('/home',[UserController::class,'select']);
    Route::get('/klicpr/{id}',[UserController::class,'clik']);
    Route::get('/transaksi/{id}',[UserController::class,'transaksi']);
    Route::post('/beli/{id}',[UserController::class,'buy']);
    Route::get('/logout',[UserController::class,'logout']);

});


