<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserUpdateController extends Controller
{
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
}
