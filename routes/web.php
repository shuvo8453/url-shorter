<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('main');
})->middleware(Authenticate::class);

Route::group(['middleware' => ['auth']], function() {
    Route::get('dashboard',[AuthController::class, 'index'])->name('dashboard');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/registration', [AuthController::class, 'registation'])->name('registation');
Route::post('/post_login', [AuthController::class, 'postLogin'])->name('post_login');
Route::post('/post_registration', [AuthController::class, 'postRegistration'])->name('post_registration');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
