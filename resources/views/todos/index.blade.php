@extends('layouts.app')

@section('title', 'List')

@section('content')
    @foreach ($todos as $todo)
        <div>
            <a href="/todos/{{ $todo->id }}">{{ $todo->title }}</a>
            <p>{{ $todo->description }}</p>
        </div>
    @endforeach
@endsection
