@extends('layouts.app')
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
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <label for="author">Name</label>
            <input type="text" name="author" id="author" class="form-control" required>
          </div>
          <input type="hidden" name="user_id" value="{{ auth()->user()->name }}">
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file" required>
          </div>
  
          <button type="submit" class="btn btn-primary btn-block">Create Course</button>
        </form>
      </div>
    </div>
  </div>
@endsection

