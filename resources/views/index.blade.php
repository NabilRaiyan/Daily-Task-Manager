
<div>Hello from blade template</div>

<!-- 
    //if $name is set then show this else don't show
@isset($name)
    <div>Hello My name is {{$name}} and I am {{$age}} years old</div>
@endisset -->

    <h3>All Taks</h3>
    <div>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <p>Task: {{$task->id}}</p>
                <p>{{$task->title}}</p>
                <p>{{$task->description}}</p>
                <p>{{$task->long_description}}</p>
                <br><br>

            @endforeach
            @else
                <h2>No task</h2>
        @endif
    </div>

