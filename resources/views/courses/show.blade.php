@extends('layouts.app')

@section('content')
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <img src="{{ asset('images/' . $course->image) }}" alt="{{ $course->title }}">
    <p><strong>Subject:</strong> {{ $course->subject }}</p>
    <p><strong>Experience:</strong> {{ $course->experience }}</p>
    <p><strong>Place:</strong> {{ $course->place }}</p>
    <p><strong>Price:</strong> {{ $course->price }}</p>
    <p><strong>Phone:</strong> {{ $course->phone }}</p>
@endsection