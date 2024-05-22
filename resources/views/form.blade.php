@extends('layouts.app')

<!-- reuseable form for update and add -->
@section('title', isset($task) ? 'Edit Task' : 'Add Task')
<!-- style directive -->
@section('styles')
    <style>
        .error-message{
            color: red;
            font-size: 1rem;
        }
    </style>
@endsection

@section('content')
    <!-- adding task update route and form or insert  -->
    <form action="{{isset($task) ? route('task-update', ['id'=>$task->id]) : route('task.store')}}" method="POST">
        @csrf
        @isset($task)
            @method("PUT")
        @endisset
        <div>
            <input placeholder="Title" type="text" name="title" id="title" value="{{$task -> title ?? old('title')}}">
        </div>
        @error ('title')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
            <textarea placeholder="Description" rows="5" name="description" id="description">{{$task->description ?? old('description')}}</textarea>
        </div>
        @error ('description')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
        <textarea placeholder="Long Description" rows="10" name="long_description" id="long_description">{{$task->long_description ?? old('long_description')}}</textarea>
        </div>
        @error ('long_description')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
            <button type="submit">@isset($task)
                Update Task
                @else
                Add Task
                @endisset
            </button>
        </div>
    </form>

    <!-- adding tasks route to go back to the all task -->
    <a href="{{route('tasks.index')}}">Back to all task</a>
@endsection