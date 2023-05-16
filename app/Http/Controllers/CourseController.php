<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function create(Request $request)
    {
        $course = new Course;

        $course->id = $request->id;
        $course->subject = $request->subject;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->experience = $request->experience;
        $course->place = $request->place;
        $course->price = $request->price;
        $course->phone = $request->phone;


        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);

        $course->image = $filename;

        $course->save();

        return redirect('/courses');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $courses = Course::all();
    
        return view('courses.courses', compact('courses', 'search'));
    }
    public function show($id)
    {
        $course = Course::find($id);

        return view('courses.show', compact('course'));
    }
}

