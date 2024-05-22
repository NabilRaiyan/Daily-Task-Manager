@extends('layouts.app')
<!-- 'pagination::simple-bootstrap-5' -->

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

    <h3 class="mb-5 mt-10 text-2xl text-gray-900 inline-block">All Taks</h3>
    <a class="bg-green-200 text-md font-serif text-gray-700 p-2 rounded-md ml-10" href="{{route('task-create')}}">Create Task</a>

   
    <div class="bg-orange-100 mt-10 rounded-md p-8  w-full">
            @forelse ($tasks as $task)
                <div class="task-div mt-5">
                    <p class="inline-block task-id text-base">Task: {{$task->id}}</p>
                    <p class="inline-block task-title text-base"><a href="{{ route('single-task.show', ['id'=>$task->id])}}">{{$task->title}}</a></p>
                    <!-- <p>{{$task->description}}</p>
                    <p>{{$task->long_description}}</p> -->
                    <a class="inline-block edit-btn" href="{{route('edit-task', ['id'=>$task->id])}}">Edit Task</a>
                    <a href="{{route('task-delete', ['id'=>$task->id])}}" class="inline-block delete-btn">Delete Task</a>
                    <div class="inline-block task-complete-toggle">
                        <form method="POST" action="{{route('task.toggle-complete', ['id'=>$task->id])}}">
                            @csrf
                            @method("PUT")
                            <button type="submit" class="text-base bg-orange-50 p-1 rounded-md">
                                Task {{$task->completed ? '✅' : '❌'}}
                            </button>

                            <div class="task-complete-toggle inline-block ">
                            @if ($task->completed)
                                <span class="text-base text-green-700 font-serif">Completed</span>
                            @else
                                <span class="text-base text-red-700 font-serif">Not Completed</span>
                            @endif
                        </div>
                        </form>
                </div>
                </div>
                @empty
                    <h2 class="text-2xl text-gray-900">No task</h2>
            @endforelse   
    </div>
    @if ($tasks->count())
                <nav class="mt-10 mb-8">
                    {{$tasks->links()}} 
                </nav>
            @endif
@endsection
