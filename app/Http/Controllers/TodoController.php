<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        $data = [
            "todos" => $todos
        ];

        return view('todos.index', $data);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->route('todos.index');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->completed = $request->has('completed');
        $todo->save();

        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index');
    }
}