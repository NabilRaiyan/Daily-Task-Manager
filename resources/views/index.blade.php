
<div>Hello from blade template</div>

<!-- 
    //if $name is set then show this else don't show
@isset($name)
    <div>Hello My name is {{$name}} and I am {{$age}} years old</div>
@endisset -->

    <h3>All Taks</h3>
    <div>
        <!-- @if (count($tasks) > 0) -->
            @forelse ($tasks as $task)
                <div>
                    <p>Task: {{$task->id}}</p>
                    <p><a href="{{ route('single-task.show', ['id'=>$task->id])}}">{{$task->title}}</a></p>
                    <!-- <p>{{$task->description}}</p>
                    <p>{{$task->long_description}}</p> -->
                    <!-- <br><br> -->
                </div>
                @empty
                    <h2>No task</h2>
            @endforelse
           
        <!-- @endif -->
    </div>
    <a href="{{route('task-create')}}">Create Task</a>

