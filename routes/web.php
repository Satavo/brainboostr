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



// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'ID: '.$id.'. Name: '.$name;
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::patch('/user/{id}', 'App\Http\Controllers\UserUpdateController@update')->name('user.update')->middleware('auth');