<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tassk</title>
</head>
<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" maxlength="510">{{ $task->description }}</textarea>
        <input type="hidden" name="completed" value="0">
        <input type="checkbox" name="completed" value="1" {{ $task->completed ? 'checked' : '' }}> Completed
        <button type="submit">Update</button>
    </form>
</body>
</html>