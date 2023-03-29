<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($todos as $key => $todo)
            <li><a href="{{ route('todo.show', ['id' => $todo->id]) }}">{{ $todo->todo }}</a></li>
        @endforeach
    </ul>

    <form method="POST" action="/">
        @csrf
    
        <input type="text" name="todo" value="about.blade.php">
        <label for="task">Task Name</label><br>

        <button>Save</button>
    </form>
</body>
</html>