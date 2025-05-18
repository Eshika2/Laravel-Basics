<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function() {
//     // return 'Hello World';
//     return response('<h1>Hello World</h1>', 200);
// });

Route::get('/StudentSavePage', function () {
    return view('index');
});

//when we search /AddStudent in web browser the function in StudentContoller (Addstudent) is called
Route::controller(StudentController::class)->group(function(){
    Route::get('/AddStudent', 'Addstudent'); 
    Route::post('/saveStudent', 'save')->name('student.save'); // student.save will go to the form tag in index.blade.php
    // function save() will be called then.

});