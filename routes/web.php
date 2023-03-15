<?php

use App\Http\Controllers\AuthChangePasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\userController_;
use Illuminate\Support\Facades\Route;

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

//pengarahan ke views tergantung nama

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/siswa/{id}', function ($id) {
//     return "<h1> Welcome siswa $id</h1>";
// })-> where('id','[0-9]+');

// Route::get('user',[UserController::class,'index']);
// Route::get('user/{id}',[UserController::class,'detail'])-> where('id','[0-9]+');

Route::resource('user',userController_::class)->middleware('isLogin');

Route::get('/',[PageController::class,'index'])->middleware('isLogin');
Route::get('/contact',[PageController::class,'contact']);

Route::get('/sesi',[SessionController::class,'index'])->middleware('isaGuest');

Route::post('/sesi/login',[SessionController::class,'login'])->middleware('isaGuest');
Route::get('/sesi/logout',[SessionController::class,'logout']);
Route::get('/sesi/register',[SessionController::class,'register'])->middleware('isaGuest');
Route::post('/sesi/create',[SessionController::class,'create'])->middleware('isaGuest');

Route::get('/sesi/forgotpassword', function () {
    return view('sesi/forgotpassword');
})->name('password.request')->middleware('isaGuest');
Route::post('/sesi/forgot-password',[ForgotPasswordController::class,'sendResetLinkEmail'])->name('sesi.password.email');
// Route::post('sesi/forgot-password', 'ForgotPasswordController@sendResetLinkEmail')->name('sesi.password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.updates');

Route::get('change-password', [AuthChangePasswordController::class, 'showChangePasswordForm'])->name('password.change');
Route::post('change-password', [AuthChangePasswordController::class, 'update'])->name('password.update');
