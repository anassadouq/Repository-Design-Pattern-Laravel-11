<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Services\TodoService;

class TodoController extends Controller
{
    public $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function index()
    {
        $todos = $this->todoService->getTodos();
        return view('todo.index', compact('todos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->todoService->saveTodo($request);
        return back()->with('success');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $this->todoService->editTodo($request, $todo);
        return redirect('/todo')->with('success', 'Todo updated successfully');
    }    

    public function destroy(Todo $todo)
    {
        $this->todoService->deleteTodo($todo);
        return back()->with('success');
    }
}