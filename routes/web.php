<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\typeController;
use App\Http\Controllers\Auth\userController;
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



Route::resource('race', typeController::class);
Route::get('/recent', [typeController::class, 'results']); 
Route::post('/save-typing-results', [typeController::class, 'store']);


Route::get('login', [userController::class, 'index'])->name('login');
Route::get('registration', [userController::class, 'registration'])->name('register');
Route::post('post-login', [userController::class, 'postLogin'])->name('login.post'); 
Route::post('post-registration', [userController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [userController::class, 'dashboard']); 
Route::get('logout', [userController::class, 'logout'])->name('logout');
Route::post('edit', [userController::class, 'edit'])->name('edit');