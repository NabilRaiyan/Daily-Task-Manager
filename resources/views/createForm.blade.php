@extends('layouts.app')


@section('title', 'Add Task')

@section('content')
    <form action="{{route('task.store')}}" method="POST">
        @csrf 
        <div>
            <input placeholder="Title" type="text" name="title" id="title">
        </div>
        <div>
            <textarea placeholder="Description" rows="5" name="description" id="description"></textarea>
        </div>
        <div>
        <textarea placeholder="Long Description" rows="10" name="long_description" id="long_description"></textarea>
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>

    <a href="{{route('tasks.index')}}">Back to all task</a>
@endsection