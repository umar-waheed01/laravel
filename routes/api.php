<?php

use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (){
    return ["name" => "umar waheed", "company" => "G7 technology"];
});

Route::group(["middleware" => "auth:sanctum"], function() {
    Route::get('/students', [StudentController::class, 'showList']); 
    Route::Post('/add-student', [StudentController::class, 'insertStudent']);
    Route::put('/update-student', [StudentController::class, 'updateStudent']);
    Route::Delete('/delete-student/{id}', [StudentController::class, 'deleteStudent']);
    Route::get('/search-student/{name}', [StudentController::class, 'searchStudent']);
});




Route::resource('member', MemberController::class);

Route::post("signup", [UserAuthController::class, 'SignUp']);
Route::post("login", [UserAuthController::class, 'Login']);
