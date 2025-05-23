<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});


// Route::prefix('student')->group(function (){
    // Route::view('/home', 'home');
    // Route::get('/show', [UserController::class,'show']);
    // Route::get('/add', [UserController::class,'add']);
// });

// Route::controller( UserController::class)->group(function (){
//     Route::view('/home', 'home');
//     Route::get('/show', 'show');
//     Route::get('/add', 'add');
// });

    // Route::view('/home', 'home')->middleware(['check1']);
    
    // Route::middleware('check1')->group(function () {
    // Route::view('/about', 'about');
    // Route::view('/aboutpage', 'about');
    // Route::view('/aboutscreen', 'about');
    // Route::view('/aboutref', 'about');
    // });

    // Route::get('/users', [UserController::class, 'users']);

    // Route::get('/student', [StudentController::class, 'getStudent']);
    
    // Route::get('/users', [UserController::class, 'queries']);
    // Route::get('/user', [UserController::class, 'get']);
    
    // Route::post('/post', [UserController::class, 'post']);
    // Route::put('/put', [UserController::class, 'put']);
    // Route::view('/form', 'users');

    // Route::any('/user', [UserController::class, 'any']);

    // Route::match(['get', 'post'], '/user', [UserController::class, 'group1']);

    // Route::view('login','login');
    // Route::view('profile', 'profile');

    // Route::post('login', [
    //     UserController::class, 'login'
    // ]);

    // Route::get('/logout', [
    //     UserController::class, 'logout'
    // ]);

    // Route::view('user','users');
    // Route::post('add', [
    //     UserController::class, 'addUser'
    // ]);

    // Route::view('upload', 'upload');
    // Route::post('upload', [UploadController::class, 'upload']);
    // Route::get('display', [UploadController::class, 'upload']);

    Route::view('addstudent', 'addstudent');
    Route::post('addstudent', [StudentController::class, 'addStudent']);
    Route::get('studentlist', [StudentController::class, 'list']);
    Route::get('studentdelete/{id}', [StudentController::class, 'delete']);
    Route::get('studentedit/{id}', [StudentController::class, 'edit']);
    Route::put('edit-student/{id}', [StudentController::class, 'update']);
    Route::get('search', [StudentController::class, 'search']);
    Route::post('delete-multi', [StudentController::class, 'deleteMulti']);


    Route::view('upload', 'image-uploads');
    Route::post('upload', [ImageController::class, 'upload']); 
    Route::get('displayImage', [ImageController::class, 'displayImage']); 
    

    Route::view('layout','layout');
    Route::view('signup','signup');

    Route::get('list', [SellerController::class, 'list']);
    Route::get('product', [ProductController::class, 'product']);
    Route::get('save', [SellerController::class, 'save']);


    Route::resource('allusers', UsersController::class);