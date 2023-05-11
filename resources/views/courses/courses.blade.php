@if (session('successMsg'))
    <div>{{ session('successMsg') }}</div>
@endif

<table>

    <thead>
        <tr>
            <th>Предмет-ы</th>
            <th>Заголовок</th>
            <th>О ваших занятиях</th>
            <th>О вашем опыте</th>
            <th>Место проведения занятия</th>
            <th>Стоимость занятия</th>
            <th>укажитеваш контактный номер телефона</th>
            <th>фотография карточки</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course-> sbjects}}</td>
                <td>{{ $course-> Heading}}</td>
                <td> {{ $course-> mentoring}}</td>
                <td> {{ $course-> experience}}</td>
                <td> {{ $course-> place}}</td>
                <td> {{ $course-> cost}}</td>
                <td> {{ $course-> number}}</td>
        @endforeach