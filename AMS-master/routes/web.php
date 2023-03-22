<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Models\Schedule;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/classes', function() {
     return "My Classess";
});

Route::get('/forums', function() {
    return "Forums";
});

Route::get('/news', function() {
    return "News";
});

Route::any('/contacts', function() {
    return 'contact';
});  

Route::redirect('/contact-us', '/contacts');

//Eloquent Model
/*Route::get('course', function() {
    $courses = Course::with('subjects');
    return $courses;
});*/
Route::get('employee', function() {
    $employees = Employee::with('schedules')->get();
    return $employees;
});
