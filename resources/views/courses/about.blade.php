@extends ('layouts.app')
@section ('content')
    <div>
        <h1>Selected card:</h1>
        <p>{{ $course->subject }}</p>
        <p>{{ $course->description }}</p>
        <p>{{ $course->price }}</p>
    </div>
@endsection