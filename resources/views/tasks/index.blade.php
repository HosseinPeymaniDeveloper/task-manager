<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    @if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
    @endif
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">Add Task</a>
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->completed ? 'Done' : 'Not done' }} - <strong>{{ $task->title }}</strong> - {{ $task->description }}
                [<a href="{{ route('tasks.edit', $task->id) }}">Edit</a>]
                [<form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>]
            </li>
        @endforeach
    </ul>
</body>
</html>