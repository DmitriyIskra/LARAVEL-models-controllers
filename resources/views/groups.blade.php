<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Создание новой группы</div>
    <a href="/groups/create" class="href">CREATE NEW GROUP</a>
    <h1>Список групп</h1>
    <ul>
        @foreach ($groups as $value)
        <li><a href="{{'/groups/'.$value->id}}">{{ $value->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>