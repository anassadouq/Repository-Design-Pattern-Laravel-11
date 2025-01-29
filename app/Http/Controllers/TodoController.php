<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Interfaces\TodoInterface;

class TodoController extends Controller
{
    public $todoInterface;

    public function __construct(TodoInterface $todoInterface)
    {
        $this->todoInterface = $todoInterface;
    }

    public function index()
    {
        $todos= $this->todoInterface->getTodos();
        return view('todo.index', compact('todos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->todoInterface->saveTodo($request);
        return back()->with('success');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect('/todo');
    }

    public function destroy(Todo $todo)
    {
        $this->todoInterface->DeleteTodo($todo);
        return back()->with('success');
    }
}