@extends ('layouts.app')

@section('title', $task->title)
@section('content')

    @section("styles")
        <style>
            .delete-btn{
                background-color: orange;
                border-radius: 5px;
                padding: 7px;
                color: black;
                font-size: 1rem;
                margin: 20px 0;
                text-decoration: none;
                cursor: pointer;
            }
        </style>
    @endsection

    <div class="mt-7 font-sans">
        <!-- <h2>{{$task->title}}</h2> -->
        <p class="text-base text-slate-600 mb-4">{{$task->description}}</p>

        @if ($task->long_description)
            <p class="text-base text-slate-600 mb-5">{{$task->long_description}}</p>
        @endif

        <p class="text-base text-blue-500 mt-5">Created: {{$task->created_at->diffforHumans()}}</p>
        <p class="text-base text-blue-500 mb-5">Updated: {{$task->updated_at->diffforHumans()}}</p>

        <!-- giving route name to go back to the tasks page -->
        <a class="bg-green-200 text-md font-serif text-gray-700 p-2 rounded-md" href="{{route('tasks.index')}}">⬅️ Back</a>

        <div class="text-base mb-5 mt-5"> Task Status: 
            @if ($task->completed)
                <span class="text-green-800">Completed</span>
            @else
                <span class="text-red-800">Not Completed</span>
            @endif
        </div>

    </div>

    <div>
        <form action="{{route('task-delete', ['id' => $task->id])}}" method="POST">
            @csrf
            @method('delete')
            <button class="delete-btn" type="submit">Delete</button>
        </form>
    </div>


    

@endsection