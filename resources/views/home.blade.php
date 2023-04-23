@extends('layouts.app')

@section('style')
@endsection
@section('title')
    Личный кабинет
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card">
                    @if (Auth::check())
                        <div class="card-body">
                            <h5 class="card-title">Здравствуй, {{ Auth::user()->name }}!</h5>
                            <p class="card-text">Это ваш личный кабинет</p>
                        </div>
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img src="{{ Auth::user()->avatar_url }}" class="rounded-circle" alt="avatar">
                                        <h6>Upload a different photo...</h6>
                                        <form action="{{ route('user.update.avatar', Auth::id()) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="file" class="form-control-file" name="avatar">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">Upload</button>
                                        </form>
                                    </div>
                                </div>
                        <form method="POST" action="{{ route('user.update', Auth::id()) }}">
                            @method('PATCH')
                            @csrf

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ Auth::user()->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 mb-3">
                                    <button type="submit" class="btn btn-primary mt-1">
                                        {{ __('Сохранить изменения') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="{{ route('user.update.password', Auth::id()) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label for="current_password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Текущий пароль') }}</label>

                                <div class="col-md-6">
                                    <input id="current_password" type="password"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        name="current_password" required autocomplete="current_password">

                                    @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="new_password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Новый пароль') }}</label>

                                <div class="col-md-6">
                                    <input id="new_password" type="password"
                                        class="form-control @error('new_password') is-invalid @enderror" name="new_password"
                                        required autocomplete="new_password">

                                    @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="new_password_confirmation"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Подтвердите новый пароль') }}</label>

                                <div class="col-md-6">
                                    <input id="new_password_confirmation" type="password" class="form-control"
                                        name="new_password_confirmation" required autocomplete="new_password_confirmation">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4 mb-3">
                                    <button type="submit" class="btn btn-primary mt-1">
                                        {{ __('Сохранить изменения') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@else
    <div class="card-body">
        <h5 class="card-title">Войдите, чтобы продолжить</h5>
    </div>
    @endif
    </div>
    </div>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
