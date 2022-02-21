@extends('layouts.app')

@section('title', 'List')

@section('content')
    <a href="{{ route('todos.index') }}">Back</a>
    <div>
        <a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a>
        <p>{{ $todo->description }}</p>
        <a href="{{ route('todos.edit', $todo->id) }}">Edit</a>
        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
