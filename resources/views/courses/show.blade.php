@extends('layouts.appnone')
@section('content')

    <style>
        .card{
            padding: 10px!important;
        }
    </style>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card">
                    <div class="top">
                        <div class="top_left">
                            <div class="subject">
                                <h1>{{ $course->subject }}</h1>
                            </div>
                            <div class="title">
                                <p>{{ $course->title }}<p>
                            </div>
                            <div class="place">
                                <p>Место проведения занятия</p>
                                <p>{{ $course->place }}<p>
                            </div>
                        </div>
                        <div class="top_right">
                            <div class="image">
                                <img src="{{ asset('images/' . $course->image) }}" alt="{{ $course->title }}">
                            </div>
                            <div class="Tarif">
                                <p>Тариф:</p>
                                <p>{{ $course->price }}</p>
                                <span>₽/ч<span>
                            </div>
                            <div class="subscribe">
                                <button id="registerButton" data-subject="Запись на курс">
                                    <a href="/personal">Записаться</a>
                                </button>
                                <script>
                                    document.querySelector('#registerButton').onclick = function() {
                                      const subject = this.getAttribute('data-subject');
                                      window.location.href = `/personal?subject=${subject}`;
                                    };
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="bottom_left">
                            <div class="experience">
                                <p>{{ $course->experience }}</p>
                            </div>
                        </div>
                        <div class="bottom_right">
                            <div class="description">
                                <p>{{ $course->description }}</p>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>  

@endsection