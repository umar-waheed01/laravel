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