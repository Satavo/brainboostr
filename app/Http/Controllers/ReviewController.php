<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create($course_id, Request $request)
    {
        $review = new Review;
    
        $review->body = $request->body;
        $review->course_id = $course_id;
        $review->user_id = auth()->user()->id;
    
        if ($review->save()) {
            return redirect()->back()->with('success', 'Отзыв успешно сохранен.');
        } else {
            return redirect()->back()->with('error', 'При сохранении отзыва произошла ошибка.');
        }
    }
}
