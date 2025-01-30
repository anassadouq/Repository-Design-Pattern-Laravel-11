<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Repository Design Pattern</title>
</head>
<body>
    <!-- Handling Errors -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @elseif ($message = Session::get('error'))
        <div class="alert alert-danger">{{ $message }}</div>
    @endif

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