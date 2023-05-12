@extends ('layouts.app')
@section ('content')
<style>
.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

/* Individual card styles */
.card {
    width: 300px;
    height: 100%;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,.2);
    overflow: hidden;
}

.card-image {
    height: 200px;
    width: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.card-content {
    padding: 20px;
}

h2.card-title {
    font-size: 1.2rem;
    margin-bottom: 5px;
}

h3.card-author {
    font-size: 1rem;
    color: #777;
    margin-bottom: 10px;
}

.card-description {
    font-size: .9rem;
    color: #444;
    margin-bottom: 10px;
}

.card-price {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 0;
}
</style>
<form action="{{ route('courses.search') }}" method="GET">
    <input type="text" name="search" placeholder="Поиск курсов">
    <button type="submit">Найти</button>
</form>
        <div class="card-container">
            @foreach ($courses as $course)
                <div class="card">
                    <div class="card-image" style="background-image: url('{{ asset('images/' . $course->image) }}')">
                    </div>
                    <div class="card-content">
                        <h2 class="card-title">{{ $course->title }}</h2>
                        <h3 class="card-author">{{ $course->author }}</h3>
                        <p class="card-description">{{ $course->description }}</p>
                        <h4 class="card-price">{{ $course->price }}</h4>
                    </div>
                </div>
            @endforeach
        </div>
@endsection