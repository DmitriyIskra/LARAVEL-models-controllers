<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Информация о студенте</h1>
    <div>Имя: {{ $data->name }}</div>
    <div>Фамилия: {{ $data->surname }}</div>
    <div>Группа: {{ $data->group_id }}</div>
    <div>ID студента: {{ $data->student_id }}</div>
    <div>Запись создана: {{ date_format($data->created_at, "d.m.Y") }}</div>
</body>
</html>