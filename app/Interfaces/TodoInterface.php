<?php

namespace App\Interfaces;

interface TodoInterface
{
    //Fetch all Todos
    public function getTodos();

    // Save Todo
    public function saveTodo($request);

    // Edit Todo
    public function editTodo($request, $todo);

    // Delete Todo
    public function deleteTodo(Todo $todo);
}