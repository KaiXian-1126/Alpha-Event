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

Route::get('/events/event_details/edit_detail', function(){
    return view('events/event_details/edit_detail');
});

Route::get('/events/event_details/edit_event', function(){
    return view('events/event_details/edit_event');
});
Route::get('/events/event_details/edit_anouncement', function(){
    return view('events/event_details/edit_anouncement');
});

Route::get('/events/invitation/edit_invitation', function(){
    return view('events/invitation/edit_invitation');
});

Route::get('/events/invitation/send_invitation', function(){
    return view('events/invitation/send_invitation');
});

Route::get('/PublicEvents/publiceventdetail', function(){
    return view('PublicEvents/publiceventdetail');
});


Route::get('/PublicEvents/publicevent', function(){
    return view('PublicEvents/publicevent');
});

Route::get('/MyEvents/myevent', function(){
    return view('/MyEvents/myevent');
});

// events/guests route
//Route::get('/events/guests/all_guest_list', function(){
//    return view('events/guests/all_guest_list');
//});
Route::get('/events/guests/add_guest', function(){
    return view('events/guests/add_guest');
});

Route::get('/events/guests/add_guest_list', "App\Http\Controllers\GuestController@readUnassignedGuest")->middleware('auth');;
//database access - guest
Route::post('/events/guests/add-guest', "App\Http\Controllers\GuestController@addGuest")->middleware('auth');
Route::get('/events/guests/all_guest_list', "App\Http\Controllers\GuestController@readAllGuest")->middleware('auth');
Route::get('/events/guests/delete_guest/{eventid}/{guestid}', "App\Http\Controllers\GuestController@deleteGuest")->middleware('auth');
Route::get('/events/guests/guest_list', "App\Http\Controllers\GuestController@readGuestList")->middleware('auth');

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

Route::get('/registeredevent', function(){
    return view('registeredevent');
});

//Gamification route
Route::get('/gamification/gamification_profile', function(){
    return view('gamification/gamification_profile');
});
Route::get('/gamification/ranking_dashboard', function(){
    return view('gamification/ranking_dashboard');
});
Route::get('/gamification/ranking_dashboard', function(){
    return view('gamification/ranking_dashboard');
});
Route::get('/gamification/user_profile', function(){
    return view('gamification/user_profile');
});
Route::get('/gamification/top_up', function(){
    return view('gamification/top_up');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/MyEvents/manage_team', function(){
    return view('MyEvents.manage_team');
});

Route::get('/a', function(){
    return view('layouts.eventsidebar');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
