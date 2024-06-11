<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Информация о группе</h1>
    <h2>{{$data->title}}</h2>
    <h3>ID группы в БД: {{$data->id}}</h3>
    <p>Cтарт группы {{$data->start_from}}</p>

    <h2>Список студентов</h2>
    <a href="/groups/{{ $data->id }}/students/create">Добавить студента в группу {{ $data->id }}</a>
    <ul>
        @foreach ($students as $value)
            <li>
                <a href="/groups/{{ $value->group_id }}/students/{{ $value->id }}">
                    {{ $value->name }} {{$value->surname}}
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html>