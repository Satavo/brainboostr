@extends ('layouts.app')
@section ('content')
    <div class="card">
        <div class="card-header">
            {{ $selectedCard->title }}
        </div>
        <div class="card-body">
            <p class="card-text">{{ $selectedCard->description }}</p>
        </div>
    </div>
@endsection