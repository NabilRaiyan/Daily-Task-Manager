@extends ('layouts.app')

@section('title', $task->title)
@section('content')
<div>
    <!-- <h2>{{$task->title}}</h2> -->
    <p>{{$task->description}}</p>

    @if ($task->long_description)
        <p>{{$task->long_description}}</p>
    @endif

    <p>{{$task->created_at}}</p>
    <p>{{$task->updated_at}}</p>
</div>

@endsection