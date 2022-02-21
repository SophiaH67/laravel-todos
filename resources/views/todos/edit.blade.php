@extends('layouts.app')

@section('title', 'Edit a Todo')

@section('content')
    <form action="{{ route('todos.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="My Awesome Todo" value="{{ $todo->title }}">
        <textarea name="description" placeholder="My Awesome Todo Description" rows="4"
            maxlength="255">{{ $todo->description }}</textarea>
        <button type="submit">Save</button>
    </form>
@endsection
