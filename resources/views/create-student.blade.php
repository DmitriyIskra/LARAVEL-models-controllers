<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Добавить студента в группу {{ $id }}</h3>

    <form action="/groups/{{ $id }}/students" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label for="">
            ID студента 
            <input type="text" name="student_id" required>            
        </label> <br>
        <label for="">
            Имя студента 
            <input type="text" name="name" required>            
        </label> <br>
        <label for="">
            Фамилия студента 
            <input type="text" name="surname" required>            
        </label>
        <button>Сохранить</button>
    </form>
</body>
</html>