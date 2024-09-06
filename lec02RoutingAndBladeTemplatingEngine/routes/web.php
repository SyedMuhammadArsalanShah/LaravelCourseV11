<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/intro', function () {
    return view('introduction');
});

Route::get('/info/{username}/{userid?}', function ($name, $id=null) {


 echo "Name ".$name."<br>";
 echo "ID ".$id."<br>";

});


Route::get('/information/{username}/{userid?}', function ($name, $id=null) {

    $student= "<em>Shaaf</em>";
    $data=compact('name', 'id', 'student');
    return view('info')->with($data);
});
