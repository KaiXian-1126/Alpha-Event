<?php

use Illuminate\Support\Facades\Route;

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

// events/event_detials route
Route::get('/events/event_details/event_detial', function(){
    return view('events/event_details/event_detail');
});


// events/guests route
Route::get('/events/guests/all_guest_list', function(){
    return view('events/guests/all_guest_list');
});
Route::get('/events/guests/guest_list', function(){
    return view('events/guests/guest_list');
});
Route::get('/events/guests/add_guest_list', function(){
    return view('events/guests/add_guest_list');
});
// events/todo_list route
Route::get('/events/todo_list/todo_list', function(){
    return view('events/todo_list/todo_list');
});
Route::get('/events/todo_list/view_todo', function(){
    return view('events/todo_list/view_todo');
});
