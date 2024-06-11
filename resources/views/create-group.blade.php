<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Создание новой группы</h1>
    <form action="/groups" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label>
            Название группы
            <input type="text" name="title">
        </label>
        <label for="">
            Старт группы
            <input type="date" name="start_from">
        </label>
        <input class="submit" type="submit" value="SAVE">
    </form>
</body>
</html>