<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Models\Student;


Route::get('/students', function () {

    $students = Student::all();

    return view('students', compact('students'));
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/andrew', function() {
    return view('andrewtest');
});

Route::get('/helloworld', function() {
    return view('helloworld');
});

Route::get('/mypage', function() {
    return view('mypage'); // loads resources/views/mypage.blade.php
});

Route::get('/home', function() {
  
    $n = "ANDREW";
    $name = $n;
   
   //return  $n;
   return view('home', ['name' => $name]);
});


Route::get('/json', function() {
    

    return response()->json(
        [ 'name' =>'Andy' ,
          'age' => 25]
    );
});


Route::get('/download', function() {

 return response()->download(storage_path('app/files/download'));
  
});



Route::get('/text', function() {

 return response('Hello Andrew!', 200) ->header('Content-Type', 'text/plain');
  
});


Route::get('/form1', function() {
    $name1 = "NEW NAME";
    $name2 ="NAME TWO ";
    return view('form1',[ 'name1' => $name1,'name2' => $name2  ]); // loads resources/views/mypage.blade.php
});




Route::get('/processform', function () {
    return view('form1');
});


 use Illuminate\Support\Facades\Validator;

Route::post('/processform', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name1' => 'required|min:3',
        'name2' => 'required|min:3'
    ], [
        'name1.min' => 'Name1 must be at least 3 characters long.',
        'name2.min' => 'Name2 must be at least 3 characters long.',
    ]);

    if ($validator->fails()) {
        return view('form1')
            ->withErrors($validator)           // ✅ Creates proper ViewErrorBag
            ->withInput();                     // ✅ Preserves old input
    }

    $name1 = $request->input('name1');
    $name2 = $request->input('name2');
    return view('form1', compact('name1', 'name2'));
});

Route::get('/test', function () {
    return "Route reached";
});


Route::get('/andrewx', function () {
    return "ANDREWX";
})->middleware('simplemsg');




Route::get('/names/{name?}', function (Request $request, $name = 'Guest') {
    return "Hello, $name";
});

Route::get('/test-middleware', function() {
    $kernel = app(\App\Http\Kernel::class);
    dd($kernel->getRouteMiddleware());
});