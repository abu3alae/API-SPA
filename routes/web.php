<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
Route::prefix('auth')->group(function() {
    Route::post('login', LoginController::class);
    //Route::post('register', 'Auth\RegisterController');
    //Route::post('logout', 'Auth\LogoutController');
    //Route::post('password/email', 'Auth\ForgotPasswordController');
    //Route::post('password/reset', 'Auth\ResetPasswordController');
    //Route::post('email/verify', 'Auth\VerificationController');
    //Route::post('email/resend', 'Auth\VerificationResendController');
});