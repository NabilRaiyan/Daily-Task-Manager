@extends('layouts.app')

<div>Hello from blade template</div>

@section('styles')
<style>

    .task-complete-toggle{
        display: inline-block;
        margin-left: 10px;
    }
    .edit-btn{
        color: green;
        font-size: 0.9rem;
        display: inline-block;
        margin-left: 10px;
    }

    .delete-btn{
        color: red;
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
@section('content')

    <h3>All Taks</h3>
    <div>
            @forelse ($tasks as $task)
                <div class="task-div">
                    <p class="task-id">Task: {{$task->id}}</p>
                    <p class="task-title"><a href="{{ route('single-task.show', ['id'=>$task->id])}}">{{$task->title}}</a></p>
                    <!-- <p>{{$task->description}}</p>
                    <p>{{$task->long_description}}</p> -->
                    <a class="edit-btn" href="{{route('edit-task', ['id'=>$task->id])}}">Edit Task</a>
                    <a href="{{route('task-delete', ['id'=>$task->id])}}" class="delete-btn">Delete Task</a>
                    <div class="task-complete-toggle">
                        <form method="POST" action="{{route('task.toggle-complete', ['id'=>$task->id])}}">
                            @csrf
                            @method("PUT")
                            <button type="submit">
                                Task {{$task->completed ? '✅' : '❌'}}
                            </button>

                            <div class="task-complete-toggle">
                            @if ($task->completed)
                                <span>Completed</span>
                            @else
                                <span>Not Completed</span>
                            @endif
                        </div>
                        </form>
                       
                </div>
                </div>
                @empty
                    <h2>No task</h2>
            @endforelse

            @if ($tasks->count())
                <nav>
                    {{$tasks->links('pagination::simple-bootstrap-5')}}
                </nav>
            @endif

            
           
    </div>
    <a class="create-btn" href="{{route('task-create')}}">Create Task</a>
@endsection
