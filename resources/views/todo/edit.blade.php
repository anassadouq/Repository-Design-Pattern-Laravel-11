<form action="{{ route('todo.update', $todo) }}" method="POST" class="p-4">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
        <label for="nom">title:</label>
        <input type="text" name="title" value="{{ $todo->title }}">
    </div>

    <div class="form-group mb-3">
        <label for="adresse">description:</label>
        <input type="text" name="description" value="{{ $todo->description }}">
    </div>

    <div class="text-center">
        <button type="submit">Update</button>
    </div>
</form>