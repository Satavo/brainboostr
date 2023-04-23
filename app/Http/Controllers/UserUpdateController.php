<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use App\Models\User;

class UserUpdateController extends Controller
{
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required', 'min:8', 'confirmed'],
        ]);

        Auth::user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back()->with('success', 'Password has been changed successfully!');
    }
    public function update(Request $request, $id)
    {
        // Находим экземпляр пользователя
        $user = User::find($id);
    
        // Обновляем данные пользователя
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();
    
        // Перенаправляем пользователя на страницу "Личный кабинет"
        return redirect('/home')->with('success', 'Данные пользователя успешно обновлены');
    }
    public function updateAvatar(Request $request, User $user)
    {
    // Проверяем, авторизован ли текущий пользователь и имеет ли он право обновлять аватары
    $this->authorize('update', $user);

    // Проверяем, загружен ли файл
    if (!$request->hasFile('avatar')) {
        return redirect()->back()->with('error', 'Необходимо выбрать файл для загрузки!');
    }

    // Получаем файл аватара
    $file = $request->file('avatar');

    // Проверяем, является ли файл изображением
    if (!$file->isValid() || !in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png'])) {
        return redirect()->back()->with('error', 'Допустимые форматы изображений: JPG, JPEG, PNG.');
    }

    // Генерируем имя файла
    $filename = uniqid() . '.' . $file->getClientOriginalExtension();

    // Сохраняем файл в директории storage/app/public/avatars
    $file->storeAs('public/avatars', $filename);

    // Обновляем имя аватара в базе данных
    $user->avatar = $filename;
    $user->save();

    // Возвращаем ответ с сообщением об успешной загрузке
    return redirect()->back()->with('success', 'Аватар успешно загружен!');
    }
}
