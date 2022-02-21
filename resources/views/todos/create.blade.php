@extends('layouts.app')

@section('title', 'Create a new Todo')

@section('content')
    <form action="{{ route('todos.store') }}" method="POST">
        @csrf
        @method('POST')
        <input type="text" name="title" placeholder="My Awesome Todo">
        <textarea name="description" placeholder="My Awesome Todo Description" rows="4" maxlength="255"></textarea>
        <button type="submit">Add</button>
    </form>
@endsection
