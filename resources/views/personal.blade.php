@extends('layouts.app')
@section('title')
    Личный кабинет
@endsection
@section('content')
		<div class="personal_content">
			<div class="personal_content_me">
                <div class="personal_content_me_images">
                    @if (Auth::user()->avatar)
                        <img src="/avatars/{{ Auth::user()->avatar }}" style="border-radius: 10px; max-width: 100%; height: auto;">
                    @else
                        <img src="/images/Avatar.jpg" style="border-radius: 10px; max-width: 100%; height: auto;">
                    @endif
                </div>
			</div>
			<div class="personal_content_requests">
			  <div class="message">
			  <h1>Мои сообщения</h1>
			  </div>
			  <div class="request">
				  <div class="reques_img">
					  <img src="images\paper.png" alt="Газета">
				  </div>
                  @if(auth()->user()->role === 'student')
				  <div class="request_text">
					  <span>Нет текущих курсов</span>
				  </div>
                  @endif
                  @if(auth()->user()->role === 'teacher')
                  <div class="request_text">
                    <span>Нет запросов на занятия</span>
                  </div>
                  @endif
				  <div class="request_button">
                    @if(auth()->user()->role === 'student')
					  <button>
						  <a href="/courses">Найти преподавателя</a>
					  </button>
                    @endif
					@if(auth()->user()->role === 'teacher')
					  <button>
						  <a href="/courses/create">Начать преподавать</a>
					  </button>
                    @endif
				  </div>
			  </div>
			</div>
		  </div>
		</div>
    </div>
@endsection