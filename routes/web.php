<?php

use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UpdateController;

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


Route::group(['middleware' => 'guest'], function() {
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::get('register', [AuthController::class,'register_view'])->name('register');
    Route::post('register', [AuthController::class,'register'])->name('register');
});

Route::group(['middleware' => 'auth'],function(){
    Route::get('home', [AuthController::class, 'home'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
   

});

Route::get('forgot-password',[ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot.password.get');
Route::post('forgot-password',[ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot.password.post');
Route::get('reset-password/{token}',[ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password',[ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('funds', FundController::class);
Route::resource('updates', UpdateController::class);

Route::get('/contact-us',[ContactController::class,'contact']);
Route::post('/send-message',[ContactController::class, 'sendEmail'])->name('contact.send');



// adding stripe functionality to payment controller

Route::get('/payment',  [PaymentController::class, 'index']);
Route::post('/payment', [PaymentController::class, 'donet']);


