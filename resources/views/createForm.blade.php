@extends('layouts.app')


@section('title', 'Add Task')
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
    <form action="{{route('task.store')}}" method="POST">
        @csrf 
        <div>
            <input placeholder="Title" type="text" name="title" id="title" value="{{old('title')}}">
        </div>
        @error ('title')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
            <textarea placeholder="Description" rows="5" name="description" id="description">{{old('description')}}</textarea>
        </div>
        @error ('description')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
        <textarea placeholder="Long Description" rows="10" name="long_description" id="long_description">{{old('long_description')}}</textarea>
        </div>
        @error ('long_description')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>

    <a href="{{route('tasks.index')}}">Back to all task</a>
@endsection