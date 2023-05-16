<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class AboutController extends Controller
{
    public function about()
    {
    return view('courses.about');
    }

    public function show($id) {
        $selectedCard = Course::findOrFail($id); // получаем объект Course из базы данных по id
        session(['selectedCardId' => $id]); // сохраняем id выбранной карточки в сессию
        return view('/about', compact('selectedCard')); // передаем объект Card в представление selected_card.blade.php
    }
}
