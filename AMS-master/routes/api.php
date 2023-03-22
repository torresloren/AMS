<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Models\Schedule;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//CRUD using Eloquent
Route::get('employee', function() {
    $employees = Employee::with('employees')->get();
    return $employees;
});

Route::post('employee/create', function(Request $request) {
    $course = new Course;
    //$course->name = $request->name;
    //$course->is_draft = $request->is_draft;
    $course->fill($request->all());
    $course->save();

    return $course;
});

Route::put('/course/{id}', function(Request $request, $id) {

    $course = Course::find($id);
    $course->name = 'Updated';
    $course->save();

    return $course;
});
Route::delete('/course/{id}', function(Request $request, $id) {

    $course = Course::find($id);
    $course->delete();

    return $course;
});




//HANDS ON QUIZ
//CRUD USING ELOQUENT
Route::get('employee', function() {
    $employees = Employee::with('schedules')->get();
    return $employees;
});

Route::post('employee/create', function(Request $request){
    $employee = new Employee;
    $employee->fill($request->all());
    $employee->save();
    return $employee;
});

Route::put('/employee/{id}', function(Request $request, $id) {

    $employee = Employee::find($id);
    $employee->name = 'Updated';
    $employee->save();
    return $employee;
});

Route::delete('/employee/{id}', function(Request $request, $id) {

    $employee = Employee::find($id);
    $employee->delete();
    return $employee;
});




