<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repository Design Pattern</title>
</head>
<body>
    <!-- Create Todo -->
    <form action="{{ route('todo.store') }}" method="post">
        @csrf
        <div>
            <label for="">Title</label>
            <input type="text" name="title" required>
        </div>

        <div>
            <label for="">Description</label>
            <input type="text" name="description" required>
        </div>
        <button type="submit">Submit</button>
    </form><br><br>

    <!-- List Todos -->
    <table>
        <thead>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        @foreach($todos as $todo)
            <tbody>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->description }}</td>
                <td>
                    <form action="{{ route('todo.destroy', $todo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('todo.edit', $todo) }}">Update</a>
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tbody>
        @endforeach
    </table>
</body>
</html>