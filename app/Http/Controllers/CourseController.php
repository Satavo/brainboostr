<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function create(Request $request)
    {
        $course = new Course;

        $course->title = $request->title;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->author = $request->author;

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);

        $course->image = $filename;

        $course->save();

        return redirect('/courses');
    }

    public function index()
    {
        $courses = Course::all();

        return view('courses.courses', compact('courses'));
    }
}

