<?php

namespace App\Services;

use App\Interfaces\TodoInterface;

class TodoService
{
    public $todoInterface;

    public function __construct(TodoInterface $todoInterface)
    {
        $this->todoInterface = $todoInterface;
    }

    // Fetch all Todos
    public function getTodos()
    {
        return $this->todoInterface->getTodos();
    }

    // Save Todo
    public function saveTodo($request)
    {
        // Save Todo
        $this->todoInterface->saveTodo($request->all());
    }

    public function editTodo($request, $todo)
    {
        // Edit Todo
        $this->todoInterface->editTodo($todo, $request->all());
    }

    public function deleteTodo($todo)
    {
        return $this->todoInterface->deleteTodo($todo);
    }
}