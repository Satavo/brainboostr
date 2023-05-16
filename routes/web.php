<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;

Route::get('/', action: 'App\Http\Controllers\MainController@main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*Для перехода на лк*/
Route::get('/personal', function () {
    return view('personal');
});

/*Для перехода на сообщения*/
Route::get('/messages', function () {
    return view('messages');
});

/*Для перехода на профиль*/
Route::get('/profile', function () {
    return view('profile');
});

/*Для перехода на создание курса*/
Route::get('/create', function () {
    return view('create');
});

Route::patch('/user/{id}', 'App\Http\Controllers\UserUpdateController@update')->name('user.update')->middleware('auth');

Route::patch('/users/{user}/update-password', 'App\Http\Controllers\UserUpdateController@updatePassword')
    ->name('user.update.password')
    ->middleware('auth');

Route::post('/home', [App\Http\Controllers\UserUpdateController::class, 'store'])->name('user.update.store');

Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.email');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('password.update');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::get('/courses', 'App\Http\Controllers\CourseController@index');
Route::get('/courses/create', function() { return view ('courses.coursecreate'); }) -> middleware('teachermiddleware');
Route::post('/courses', 'App\Http\Controllers\CourseController@create');
Route::get('/courses/search', 'App\Http\Controllers\CourseController@index')->name('courses.search');
Route::get('/about', 'App\Http\Controllers\AboutController@about');
Route::get('/about/{card_id}', 'AboutController@showAboutPage');