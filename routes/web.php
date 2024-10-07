<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $username = 'John';
    return view('welcome',[
        'name' =>   $username
      ]);
});


Route::get('/pass-array', function () {
    $tasks = [
        'Elmegy bevásárolni',
        'Elmegy a stadionba',
        'Elmegy dolgozni',
        'Feladat 4'
    ];

    $foobar = 'foobar';
    return view('tasklist')->withTasks($tasks)->withFoo($foobar);
});

$foobar = 'foobar';
return view('tasklist')->with([
    'foo' => $foobar,
    'tasks' => $tasks
]);