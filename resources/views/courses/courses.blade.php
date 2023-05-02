@if (session('successMsg'))
    <div>{{ session('successMsg') }}</div>
@endif

<table>
    <thead>
        <tr>
            <th>Предмет</th>
            <th>Стоимость</th>
            <th>Дата</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->subject }}</td>
                <td>{{ $course->price }}</td>
                <td> {{ $course->date }}</td>
        @endforeach