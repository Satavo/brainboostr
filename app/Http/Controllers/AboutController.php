<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseController;

class AboutController extends Controller
{
    public function about()
    {
    return view('courses.about');
    }

    public function show($id) {
        $course = Course::find($id); // получить объект карточки из базы данных
        return view('/about', ['selectedCard' => $course]); // передать переменную $selectedCard в представление about.blade.php
    }
}
