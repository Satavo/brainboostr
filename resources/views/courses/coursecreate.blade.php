@extends('layouts.appnone')
@section('title')
    Создать курс
@endsection
@section('content')


<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="/courses" method="post" enctype="multipart/form-data" class="p-5 bg-light">
          @csrf
  
          <div class="form-group">
            <label for="subject">Придмет</label>
            <input type="text" name="subject" id="subject" class="form-control_custom" rows="1" required placeholder="Название предмета">
          </div>

          <div class="form-group">
            <label for="title">Заголовок</label>
            <textarea type="text" name="title" id="title" class="form-control" rows="2" required placeholder="Я учусь в МИФИ и готов преподавать математику и физику для учеников средней и старшей школы в Москве."></textarea>
          </div>

          <div class="form-group">
            <label for="description">О ваших занятиях</label>
            <textarea type="text" name="description" id="description" class="form-control" rows="4" required placeholder="Самое время убедить ваших будущих учеников в уникальности вашего подхода к обучению"></textarea>
          </div>

          <div class="form-group">
            <label for="experience">О вашем опыте</label>
            <textarea type="text" name="experience" id="experience" class="form-control" rows="4" required placeholder="Расскажите вашим будущим ученикам о себе"></textarea>
          </div>

          <div class="form-group">
            <label for="place">Место проведения</label>
            <input type="text" name="place" id="place" class="form-control_custom" required placeholder="Место проведения уроков">
          </div>

          <div class="form-group">
            <label for="price">Стоимость занятия</label>
            <input type="number" name="price" id="price" class="form-control_custom" required placeholder="800₽/ч">
          </div>

          <div class="form-group">
            <label for="phone">Укажитеваш контактный номер телефона</label>
            <input type="number" name="phone" id="phone" class="form-control_custom" required placeholder="89659169678">
          </div>

          <input type="hidden" name="user_id" value="{{ auth()->user()->name }}">
          <div class="form-group">
            <label for="image">Аватар</label>
            <input type="file" name="image" id="image" class="form-control-file" required>
          </div>
  
          <div class="button_container">
          <button type="submit" class="btn btn-primary btn-block">Добавить курс</button>
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection

