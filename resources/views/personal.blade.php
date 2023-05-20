@extends('layouts.app')
@section('title')
    Личный кабинет
@endsection
@section('content')
		<div class="personal_content">
			<div class="personal_content_me">
                <div class="personal_content_me_images" style="width: 200px; height: 200px">
                    @if (Auth::user()->avatar)
                        <img src="/avatars/{{ Auth::user()->avatar }}">
                    @else
                        <img src="/images/Avatar.jpg">
                    @endif
                </div>
			</div>
			<div class="personal_content_requests">
			  <div class="message">
			  <h1>Мои курсы</h1>
			  </div>

			  <div class="request">
				  <div class="reques_img">
					  <img src="images\paper.png" alt="Газета">
				  </div>
                  @if(auth()->user()->role === 'student')
				  <div class="request_text">
                    <table>
                        <tbody>
                        @foreach($enrollments as $enrollment)
                            <tr>
                                <td><li>{{ $enrollment->course->subject }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
				  </div>

                  @endif
                  @if(auth()->user()->role === 'teacher')
                  <div class="request_text">
                    <table>
                        <tbody>
                        @foreach($enrollments as $enrollment)
                            <tr>
                                <td><li>{{ $enrollment->course->subject }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>                    
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