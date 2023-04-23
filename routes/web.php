<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', action: 'App\Http\Controllers\MainController@main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::patch('/user/{id}', 'App\Http\Controllers\UserUpdateController@update')->name('user.update')->middleware('auth');

Route::patch('/users/{user}/update-password', 'App\Http\Controllers\UserUpdateController@updatePassword')
    ->name('user.update.password')
    ->middleware('auth');

Route::post('/users/{user}/update-avatar', 'App\Http\Controllers\UserUpdateController@updateAvatar')->name('user.update.avatar');
