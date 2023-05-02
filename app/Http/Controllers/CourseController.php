<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.courses', ['courses' => $courses]);
    }

    public function addCourse(Request $request)
    {
        $course = new Course;
        $course->subject = $request->subject;
        $course->price = $request->price;
        $course->date = $request->date;
        $course->save();
    
        return redirect('/courses')->with('successMsg', 'Курс добавлен');
    }
}
