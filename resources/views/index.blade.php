@extends('layouts.app')

<div>Hello from blade template</div>

@section('styles')
<style>
    .edit-btn{
        color: green;
        font-size: 0.9rem;
        display: inline-block;
        margin-left: 10px;
    }

    .task-title, .task-id{
        display: inline-block;
    }

    .task-id{
        margin-right: 10px;
    }

    .task-div{
        margin-bottom: 7px;
    }

    .create-btn{
        background-color: aliceblue;
        border-radius: 5px;
        padding: 15px;
        color: black;
        font-size: 1rem;
        margin: 20px 0;
        text-decoration: none;
    }
    .create-btn:hover{
        color: green;
    }
</style>

@endsection
<!-- 
    //if $name is set then show this else don't show
@isset($name)
    <div>Hello My name is {{$name}} and I am {{$age}} years old</div>
@endisset -->

    <h3>All Taks</h3>
    <div>
        <!-- @if (count($tasks) > 0) -->
            @forelse ($tasks as $task)
                <div class="task-div">
                    <p class="task-id">Task: {{$task->id}}</p>
                    <p class="task-title"><a href="{{ route('single-task.show', ['id'=>$task->id])}}">{{$task->title}}</a></p>
                    <!-- <p>{{$task->description}}</p>
                    <p>{{$task->long_description}}</p> -->
                    <a class="edit-btn" href="{{route('edit-task', ['id'=>$task->id])}}">Edit Task</a>

                </div>
                @empty
                    <h2>No task</h2>
            @endforelse
           
        <!-- @endif -->
    </div>
    <a class="create-btn" href="{{route('task-create')}}">Create Task</a>

