@extends('layouts.app')

@section('content')
    <h1>Edit Item</h1>

    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $todo->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3" class="form-control">{{ $todo->description }}</textarea>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="completed" id="completed" class="form-check-input" {{ $todo->completed ? 'checked' : '' }}>
            <label for="completed" class="form-check-label">
            Mark as completed
        </label>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
