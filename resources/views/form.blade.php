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

        input::placeholder{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.3rem;

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
            <input class="text-base text-slate-600 w-6/12 mt-3 border p-2 border-orange-400 rounded-md" placeholder="Title" type="text" name="title" id="title" value="{{$task -> title ?? old('title')}}">
        </div>
        @error ('title')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
            <textarea class="text-base text-slate-600 w-6/12 mt-3 border p-2 border-orange-400 rounded-md" placeholder="Description" rows="5" name="description" id="description">{{$task->description ?? old('description')}}</textarea>
        </div>
        @error ('description')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
        <textarea class="text-base text-slate-600 w-6/12 mt-3 border p-2 border-orange-400 rounded-md mb-5" placeholder="Long Description" rows="10" name="long_description" id="long_description">{{$task->long_description ?? old('long_description')}}</textarea>
        </div>
        @error ('long_description')
            <p class="error-message">{{$message}}</p>
        @enderror
        <div>
            <button class="bg-green-200 text-md font-serif text-gray-700 p-2 rounded-md mb-5" type="submit">@isset($task)
                Update Task
                @else
                Add Task
                @endisset
            </button>
        </div>
    </form>

    <!-- adding tasks route to go back to the all task -->
    <a class="bg-red-200 text-base font-serif text-gray-700 p-2 rounded-md" href="{{route('tasks.index')}}">Cancel</a>
@endsection