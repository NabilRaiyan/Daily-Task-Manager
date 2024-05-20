<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

// Creating a task class and objects of that class
// class Task
// {
//     public function __construct(
//         public int $id,
//         public string $title,
//         public string $description,
//         public ?string $long_description,
//         public bool $completed,
//         public string $created_at,
//         public string $updated_at
//     ) {
//     }
// }

// $tasks = [
//     new Task(
//         1,
//         'Buy groceries',
//         'Task 1 description',
//         'Task 1 long description',
//         false,
//         '2023-03-01 12:00:00',
//         '2023-03-01 12:00:00'
//     ),
//     new Task(
//         2,
//         'Sell old stuff',
//         'Task 2 description',
//         null,
//         false,
//         '2023-03-02 12:00:00',
//         '2023-03-02 12:00:00'
//     ),
//     new Task(
//         3,
//         'Learn programming',
//         'Task 3 description',
//         'Task 3 long description',
//         true,
//         '2023-03-03 12:00:00',
//         '2023-03-03 12:00:00'
//     ),
//     new Task(
//         4,
//         'Take dogs for a walk',
//         'Task 4 description',
//         null,
//         false,
//         '2023-03-04 12:00:00',
//         '2023-03-04 12:00:00'
//     ),
// ];

Route::get("/", function(){
    return redirect()->route('tasks.index');
});

//  showing all the tasks
Route::get('/tasks', function (){
    return view('index', [
            // 'name'=>'Raiyan',
            // 'age' => 24,
            'tasks'=> \App\Models\Task::all(),
    ]);
})->name("tasks.index");

// showing single task

Route::get("/tasks/{id}", function($id){

    $task = \App\Models\Task ::findOrFail($id); // getting specific task using id if exist
    return view('show', ['task'=>$task]);
})->name("single-task.show");




// Route::get("/hello", function(){
//     $num1 = 20;
//     $num2 = 30;
//     $result = $num1 + $num2;

//     return "Hello from another page and the result is ". $result .".";
// })->name("hello");

// Route::get("/greet/{name}", function($name){
//     return "Hello " . $name . " !";
// });

// Route::get("/nope", function(){
//     return redirect()->route('hello');
// });

// if all the route is not exist then show this message
Route::fallback(function(){
    return "404 Not Found";
});