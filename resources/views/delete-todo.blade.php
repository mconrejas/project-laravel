<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="{{ route('todo-delete', ['id' => $todo->id]) }}">
        @csrf
    
        <input type="hidden" name="_method" value="DELETE">
        <input type="text" name="todo" value="{{ $todo->todo }}">
        <label for="task">Task Name</label><br>

        <button>Delete</button>
</form>

</body>
</html>