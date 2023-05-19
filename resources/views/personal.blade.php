<table>
    <thead>
        <tr>
            <th>Имя пользователя</th>
            <th>Подписанный курс</th>
        </tr>
    </thead>
    <tbody>
    @foreach($enrollments as $enrollment)
        <tr>
            <td>{{ $enrollment->user->name }}</td>
            <td>{{ $enrollment->course->title }}</td>
        </tr>
    @endforeach
    </tbody>
</table>