@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите свой Email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Новая ссылка для потдверждения отправлена на ваш Email.') }}
                        </div>
                    @endif

                    {{ __('Перед тем как продолжить пожалуйста подтвердите свой Email.') }}
                    {{ __('Если вы не получили сообщения') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Нажмите здесь чтоб получить еще.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
