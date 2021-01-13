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
Route::get('/events/event_details/event_detail', function(){
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
//events/budget route
Route::get('/events/budget/budget_list', function(){
    return view('events/budget/budget_list');
});
Route::get('/events/budget/view_budget', function(){
    return view('events/budget/view_budget');
});
Route::get('/events/budget/edit_budget', function(){
    return view('events/budget/edit_budget');
});
Route::get('/events/budget/add_budget', function(){
    return view('events/budget/add_budget');
});
// MyEvents/route
Route::get('/MyEvents/view_team', function(){
    return view('Myevents.view_team');
});
Route::get('/MyEvents/create_event', function(){
    return view('Myevents.create_event');
});
Route::get('/MyEvents/add_member', function(){
    return view('Myevents.add_member');
});