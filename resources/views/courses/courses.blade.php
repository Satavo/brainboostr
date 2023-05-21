@extends ('layouts.appnone')
@section ('content')
    <style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    /* Individual card styles */
    .card {
        width: 300px;
        height: 100%;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,.2);
        overflow: hidden;
        flex-basis: calc(25% - 20px);
        word-wrap: break-word; 
    }

    .card:hover{
        background-color: rgb(216, 216, 216)!important;
        border-color: #000000;
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

    
    h2.card-subject {
	    padding: 0px!important;
        word-wrap: break-word; 
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


<div style="display: flex; justify-content: center; margin-bottom: 20px;">
    <form action="{{ route('courses.search') }}" method="GET" style="width: 50%;">
        <input type="text" name="search" placeholder="Поиск курсов" style="width: 100%; padding: 10px; font-size: 1.2em;">
        <button type="submit" style="width: 100%; padding: 10px; font-size: 1.2em;">Найти</button>
    </form>
</div>

<div class="card-container">
    <?php $found = false; ?>
    @foreach ($courses as $course)
        @if (strpos(strtolower($course->subject), strtolower($search)) !== false)
            <?php $found = true; ?>
            <div class="card" onclick="window.location.href='{{ route('courses.show', $course->id) }}'">
                <div class="card-image" style="background-image: url('{{ asset('images/' . $course->image) }}'); border-radius: 20px;" ></div>
                <div class="card-content">
                    <h2 class="card-subject">{{ $course->subject }}</h2>
                    <h4 class="card-place">{{ $course->place }}</h4>
                    <p class="card-experience">{{ $course->description }}</p>
                    <div class="price">
                        <h4 class="card-price">{{ $course->price }}</h4>
                        <span>₽/ч<span>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
     @if (!$found)
        <div class="no-results">
            <p>Ничего не найдено.</p>
        </div>
    @endif
</div>

@endsection