<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;    

use Illuminate\support\Facades\DB;
use App\Models\User;
use Faker\Guesser\Name;

class UserController extends Controller
{
    //
    // function users() {
    //     $response = Http::withoutVerifying()->get('https://jsonplaceholder.typicode.com/users');

    //     $response = $response->body();
    //     return view('users', ['data' => json_decode($response)]);

    // }

    function queries() {
        // $result = DB::table('users')->where('password', '12345')->get();
        // return view('users', ['data' => $result]);

        // $user = DB::table('users')->where('name', 'talal')->first();
        // $user = DB::table('users')->where('name', 'talal')->get();
        // $users = DB::table('users')->get();
        // return view('users', ['data' => $users]);
       
        // $result = DB::table('users')->where('name', 'umarwaheed')->update([
        //     'password' => '123',
        // ]);
        // if($result){
        //     return "Data Inserted";
        // }else{
        //     return "Data Not Inserted";
        // }

        // $result = DB::table('users')->where('name', 'umarwaheed')->delete();
        // if($result){
        //     return "Data deleted";
        // }else{
        //     return "Data Not deleted";
        // }

        // $response = User::where('password', '12345')->first();
        // $response = [$response];

        // $response = User::insert([
        //     'name' => 'umar waheed',
        //     'email' => 'umar@gmail.com',
        //     'password' => '12345',
        // ]);
        // if($response){
        //     return "Data Inserted";
        // }else{  
        //     return "Data Not Inserted";
        // }

        // $response = User::where('name', 'muhammad umar')->update([
        //     'name' => 'muhammad umar waheed',
        // ]);
        // if($response){
        //     return "updated";
        // }else{  
        //     return "Not updated";
        // }
        // return view('users', ['data' => $response]);
        
    }

    function get (Request $req){
        return $req;
    }

    function post (Request $req){
        echo "the url is" . $req->url();
        echo "<br>";
        echo "the full url is" . $req->fullUrl();
        echo "<br>";
        echo "the path is" . $req->path();
        echo "<br>";
        echo "the method is" . $req->method();
        echo "<br>";
        echo "the request is" . $req->isMethod('post');
        echo "<br>";
        echo "the ip is ". $req->ip();
        echo "<br>";
    }

    // function login(Request $req) {
    //     $req->session()->put('name', $req->input('name'));
    //     $req->session()->put('allData', $req->input());
    //     // echo session('name');
    //     return redirect('profile');
    // }

    // function logout(){
    //     session()->pull('name');
    //     return redirect('login');
    // }

    function addUser(Request $req){
        $req->session()->flash('message', 'user added successfully');
        return redirect('user');
    }
}

