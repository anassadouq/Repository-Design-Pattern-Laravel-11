<?php

namespace App\Interfaces;

interface TodoInterface
{
    //Fetch all Todos
    public function getTodos();

    // Save Todo
    public function saveTodo($request);

    // Edit Todo
    public function editTodo($todo, $request);

    // Delete Todo
    public function deleteTodo($todo);
}