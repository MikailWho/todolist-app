@extends('layouts.main')

@section('content')
@if (session()->has("username"))
<h5>
    Hello, {{ session()->get("username") }}
    <a href="/logout">Log Out</a>
</h5>
@endif
    <h1>To-Do List</h1>

    <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">Add New Item</a>

    @if ($todos->count() > 0)
        <ul class="list-group">
            @foreach ($todos as $todo)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>{{ $todo->title }}</h5>
                            <p class="mb-0">{{ $todo->description }}</p>
                        </div>

                        <div>
                            <form action="{{ route('todos.destroy', $todo) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                            <a href="{{ route('todos.edit', $todo) }}" class="btn btn-primary btn-sm">Edit</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No items found.</p>
    @endif
@endsection
