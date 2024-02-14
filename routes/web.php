<?php

use App\Http\Controllers\AuthController;
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
    return view('pages.auth.login');
})->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('registration', [AuthController::class, 'registation'])->name('registration');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('postRegistration');
