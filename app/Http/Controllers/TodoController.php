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
        $todo = $this->todoService->saveTodo($request->all()); // Ensure we pass data
        if ($todo) {
            return back()->with('success', 'Todo has been created');
        }
        return back()->with('error', 'Unable to create Todo');
    }
    
    public function edit(Todo $todo)
    {
        return view('todo.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $updatedTodo = $this->todoService->editTodo($todo, $request->all());
        if ($updatedTodo) {
            return redirect('/todo')->with('success', 'Todo updated successfully');
        }
        return redirect('/todo')->with('error', 'Unable to update Todo');
    }       

    public function destroy(Todo $todo)
    {
        $deleteTodo = $this->todoService->deleteTodo($todo);
        if ($deleteTodo){
            return back()->with('success', 'Todo deleted successfully');
        }
        return back()->with('error', 'Unable to delete Todo');
    }
}