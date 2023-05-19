<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrollment;

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
        $user_id = auth()->user()->id;
        $enrollments = Enrollment::where('course_id', $id)
                                 ->where('user_id', $user_id)
                                 ->with('user')
                                 ->get();
        return view('courses.show', compact('course'));
    }
    public function userEnrollments()
    {
        $user_id = auth()->user()->id;
        $enrollments = Enrollment::where('user_id', $user_id)
                                ->with('course')
                                ->get();
        
        return view('personal', compact('enrollments'));
    }
    public function enroll($course, Request $request)
    {
        // Проверяем, что пользователь авторизован
        if ($request->user()) {
            // Проверяем, что пользователь не зарегистрирован на этот курс
            $enrollment = Enrollment::where('user_id', $request->user()->id)
                                     ->where('course_id', $course)
                                     ->first();
            if ($enrollment) {
                // Пользователь уже зарегистрирован на этот курс, перенаправляем на страницу курса
                return redirect()->route('courses.show', ['course' => $course]);
            } else {
                // Проводим необходимые проверки и получаем данные из формы
                $course = Course::find($course);
                $user_id = $request->user()->id;
                // Записываем пользователя на курс с указанным id
                $enrollment = new Enrollment();
                $enrollment->user_id = $user_id;
                $enrollment->course_id = $course->id;
                $enrollment->save();
                // Редиректим пользователя на страницу курса
                return redirect()->route('courses.show', ['course' => $course]);
            }
        }
    
        // Если пользователь не авторизован, то перенаправляем на страницу авторизации
        return redirect()->route('login');
    }
}

