<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (){
    return ["name" => "umar waheed", "company" => "G7 technology"];
});

Route::get('/students', [StudentController::class, 'showList']); 
Route::Post('/add-student', [StudentController::class, 'insertStudent']);
Route::put('/update-student', [StudentController::class, 'updateStudent']);
Route::Delete('/delete-student/{id}', [StudentController::class, 'deleteStudent']);
Route::get('/search-student/{name}', [StudentController::class, 'searchStudent']);
