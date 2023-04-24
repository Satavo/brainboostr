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
        return back()->with('success', 'Данные пользователя успешно обновлены');
    }
    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image',
        ]);
  
        $avatarName = time().'.'.$request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('avatars'), $avatarName);
  
        Auth()->user()->update(['avatar'=>$avatarName]);
  
        return back()->with('success', 'Аватар изменен успешно.');
    }
    public function index()
    {
        return view('home');
    }
}
