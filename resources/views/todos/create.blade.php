@extends('layouts.main')

@section('content')
    <h1>Create New Item</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
