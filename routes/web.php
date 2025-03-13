<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  //  $users = DB::table('users')->limit(2)->offset(5)->get();
    /*DB::table('users')->insert([
        'name'=>'iroda',
        'age'=>21,
        'status'=>'active',
        'email'=>uniqid() ."@gmail.com"
    ]);*/
    $users = DB::table('users')->where('id' ,1)->update([
        'name'=>'iroda',
        'age'=>19
    ]);
$users = DB::table('users')->get();
    //dd($users);
    return view('welcome' ,compact('users'));
});
