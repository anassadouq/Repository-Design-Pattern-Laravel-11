<?php

namespace App\Repositories;

use App\Models\Todo;
use App\Interfaces\TodoInterface;

class TodoRepository implements TodoInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    // Fetching all the Todos from the Todo Model
    public function getTodos()
    {
        return Todo::all();
    }

    // Saving the Todo
    public function saveTodo($request)
    {
        Todo::create($request->all());
    }

    // Edit Todo
    public function editTodo($request, $todo)
    {
        $todp->update($request->all());
    }

    // Delete the Todo
    public function deleteTodo($todo)
    {
        $todo->delete();
    }
}
