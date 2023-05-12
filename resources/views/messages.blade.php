@extends('layouts.app')
@section('title')
    Чат
@endsection
@section('content')
		<div class="message_page">
			<div class="message_page_contacts">
				<h2 id="contacts-header">Все мои контакты</h2>
				<button class="search_button">Поиск</button>
			  <!-- здесь будут контакты -->
			</div>
			<div class="message_page_chat">
				<div class="message_page_chat_content">
					<div class="message_page_chat_content_text">
                        @if(auth()->user()->role === 'student')
						<h1>У вас пока нет сообщений</h1>
						<h2>Мы заметили, что вы пока не нашли преподавателя.
							 Ничего страшного! Рекомендуем вам ознакомиться с нашей системой поиска.</h2>
                        @endif
                        @if(auth()->user()->role === 'teacher')
                        <h1>У вас пока нет сообщений</h1>
						<h2>Мы заметили, что вы пока не нашли ученика.
							 Ничего страшного! Рекомендуем вам ознакомиться с нашей системой поиска.</h2>
                        @endif
					</div>
					<div class="message_page_chat_content_img">
						<img src="images\chat_img.png" alt="non-working">
					</div>
				</div>
			</div>
			<div id="contacts-modal" class="modal">
				<div class="modal-content">
				  <span class="close">&times;</span>
				  <p>У вас нет контактов</p>
				</div>
			</div>
		  </div>
	</div>
@endsection