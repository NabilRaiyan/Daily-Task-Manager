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

    <div>
        <!-- <h2>{{$task->title}}</h2> -->
        <p>{{$task->description}}</p>

        @if ($task->long_description)
            <p>{{$task->long_description}}</p>
        @endif

        <p>{{$task->created_at}}</p>
        <p>{{$task->updated_at}}</p>

        <!-- giving route name to go back to the tasks page -->
        <a href="{{route('tasks.index')}}">Back</a>
    </div>

    <div>
        <form action="{{route('task-delete', ['id' => $task->id])}}" method="POST">
            @csrf
            @method('delete')
            <button class="delete-btn" type="submit">Delete</button>
        </form>
    </div>

@endsection