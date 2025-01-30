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
    public function saveTodo($data)
    {
        return $this->todoInterface->saveTodo($data); // Return saved Todo
    }    

    public function editTodo($todo, $request)
    {
        return $this->todoInterface->editTodo($todo, $request);
    }    

    public function deleteTodo($todo)
    {
        return $this->todoInterface->deleteTodo($todo);
    }
}