<?php

namespace App\Repositories;

use App\Models\Todo;
use App\Interfaces\TodoInterface;

class TodoRepository implements TodoInterface
{
    public function __construct()
    {
        //
    }

    // Fetching all the Todos from the Todo Model
    public function getTodos()
    {
        return Todo::all();
    }

    // Saving Todo
    public function saveTodo($todo)
    {
        return Todo::create($todo);
    }

    // Edit Todo
    public function editTodo($todo, $request)
    {
        $todo->update($request);
    }

    // Delete Todo
    public function deleteTodo($todo)
    {
        $todo->delete();
    }
}