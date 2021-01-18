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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

// events/event_detials route
Route::get('/events/event_details/event_detail/{id}', "App\Http\Controllers\EventController@show");

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
Route::get('/events/guests/add_guest/{id}', "App\Http\Controllers\GuestController@accessAddGuestForm")->middleware('auth');

Route::get('/events/guests/add_guest_list/{id}', "App\Http\Controllers\GuestController@readUnassignedGuest")->middleware('auth');;
//database access - guest
Route::post('/events/guests/add-guest', "App\Http\Controllers\GuestController@addGuest")->middleware('auth');
Route::post('/events/guests/create-guest-list', "App\Http\Controllers\GuestController@createGuestList")->middleware('auth');
Route::post('/events/guests/update-guest-list', "App\Http\Controllers\GuestController@updateGuestList")->middleware('auth');
Route::get('/events/guests/all_guest_list/{id}', "App\Http\Controllers\GuestController@readAllGuest")->middleware('auth');
Route::get('/events/guests/delete_guest/{eventid}/{guestid}', "App\Http\Controllers\GuestController@deleteGuest")->middleware('auth');
Route::get('/events/guests/guest_list/{id}', "App\Http\Controllers\GuestController@readGuestList")->middleware('auth');
Route::get('/events/budget/view_budget', 'BudgetController@index');
Route::get('/events/guests/delete-guest-list/{eventid}/{guestlistname}', "App\Http\Controllers\GuestController@deleteGuestList");
Route::get('/events/guests/edit_guest_list/{eventid}/{guestlistname}', "App\Http\Controllers\GuestController@readGuestListDetails");

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
//Access to database to create event
Route::post('/MyEvents/create-event', "App\Http\Controllers\EventController@create");

//Gamification route
Route::get('/gamification/gamification_profile', "App\Http\Controllers\UserController@getUserInfo");
Route::get('/gamification/ranking_dashboard', "App\Http\Controllers\GamificationController@getLeaderboard");
Route::get('/gamification/user_profile', "App\Http\Controllers\UserController@editUserInfo");
Route::post('/gamification/update-user-profile', "App\Http\Controllers\UserController@updateUser");
Route::get('/gamification/top_up', function(){
    return view('gamification/top_up');
});
Route::get('/gamification/reward', function(){
    return view('gamification/reward');
});
Route::get('/gamification/achievement', function(){
    return view('gamification/achievement');
});
Route::get('/gamification/challenge', function(){
    return view('gamification/challenge');
});

//This is a mock data
Route::get('/gamification/mockdatadashboard', function(){
    return view('gamification/mockdatadashboard');
});
Route::get('/gamification/mockdatascore1', function(){
    return view('gamification/mockdatascore1');
});
Route::get('/gamification/mockdatascore2', function(){
    return view('gamification/mockdatascore2');
});
/////////////////////////////////////////////////////////////

Auth::routes();
Route::get('/home', "App\Http\Controllers\EventController@getAllEvents");


Route::get('/MyEvents/manage_team', function(){
    return view('MyEvents.manage_team');
});

Route::get('/a', function(){
    return view('layouts.eventsidebar');
});



