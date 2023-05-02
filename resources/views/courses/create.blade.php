<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/courses/add">
        @csrf
        <label for="subject">Предмет:</label>
        <input type="text" name="subject" id="subject" required>
        <br>
        <label for="price">Стоимость:</label>
        <input type="number" name="price" id="price" required>
        <br>
        <label for="date">Дата:</label>
        <input type="date" name="date" id="date" required>
        <br>
        <button type="submit">Добавить курс</button>
    </form>
</body>
</html>