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
Route::get('/events/event_details/edit_detail/{id}', "App\Http\Controllers\EventController@showedit");
Route::get('/events/event_details/edit_event/{id}', "App\Http\Controllers\EventController@editevent");
Route::post('/events/event_details/event-update/{id}', "App\Http\Controllers\EventController@updateEvent");
Route::get('/events/event_details/edit_anouncement/{id}', "App\Http\Controllers\EventController@editanouncement");
Route::post('/events/event_details/event-anouncement/{id}', "App\Http\Controllers\EventController@updateAnouncement");

Route::get('/events/invitation/edit_invitation/{id}', 'App\Http\Controllers\InvitationController@index');

Route::post('/save-invitation-record/{id}', 'App\Http\Controllers\InvitationController@store');

Route::get('/view-invitation-card/{id}', 'App\Http\Controllers\InvitationController@view');

Route::get('/go-to-card-send/{id}', 'App\Http\Controllers\InvitationController@show');

Route::post('/send-invitation/{id}/{id1}', 'App\Http\Controllers\InvitationController@send');

Route::get('/events/invitation/send_invitation/{id}', 'App\Http\Controllers\InvitationController@edit');


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

//database access - guest
Route::get('/events/guests/add_guest/{id}', "App\Http\Controllers\GuestController@accessAddGuestForm")->middleware('auth');
Route::get('/events/guests/add_guest_list/{id}', "App\Http\Controllers\GuestController@readUnassignedGuest")->middleware('auth');;
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
Route::get('/events/todo_list/todo_list/{id1}/{id2}', "App\Http\Controllers\TodoController@viewTask");
Route::get('/events/todo_list/view_todo/{id1}/{id2}/{id3}', "App\Http\Controllers\TodoController@edit");
Route::get('/events/todo_list/all_todo_list/{id}', "App\Http\Controllers\TodoController@show"); 
Route::post('/events/todo_list/add-todo', "App\Http\Controllers\TodoController@addTodo"); 
Route::post('/events/todo_list/add-InProgress', "App\Http\Controllers\TodoController@addInProgress"); 
Route::post('/events/todo_list/add-Completed', "App\Http\Controllers\TodoController@addCompleted"); 
Route::get('/events/todo_list/delete_todo/{id1}/{id2}/{id3}', "App\Http\Controllers\TodoController@destroy"); 
Route::post('/events/todo_list/update_todo/{id1}/{id2}/{id3}', "App\Http\Controllers\TodoController@update"); 

//events/budget route
Route::get('/events/budget/budget_list/{id1}','App\Http\Controllers\BudgetController@index');

Route::get('/events/budget/view_budget/{id}/{id2}/{id3}', 'App\Http\Controllers\BudgetController@show');

Route::get('/events/budget/edit_budget/{id}/{id1}','App\Http\Controllers\BudgetController@update');

Route::get('/events/budget/add_budget/{id}/{id1}', 'App\Http\Controllers\BudgetController@create');

Route::post('/create_budget/{id1}/{id2}/{id3}', 'App\Http\Controllers\BudgetController@store');

Route::get('/update_budget/{id}/{id1}', 'App\Http\Controllers\BudgetController@store_update');

Route::get('/delete_budget/{id}/{id1}', 'App\Http\Controllers\BudgetController@destroy');
// MyEvents/route
Route::get('/MyEvents/view_team', function(){
    return view('Myevents.view_team');
});
Route::get('/MyEvents/create_event', function(){
    return view('Myevents.create_event');
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
Route::get('/home/delete_event/{id}', "App\Http\Controllers\EventController@destroy");


// MyEvents/member/route
Route::get('/MyEvents/manage_team/{id}','App\Http\Controllers\MemberController@manageteam');
Route::get('/MyEvents/delete_team/{id}','App\Http\Controllers\MemberController@destroy');
Route::get('/MyEvents/view_team/{id}',"App\Http\Controllers\MemberController@viewteam");
Route::get('/MyEvents/add_member/{id}',"App\Http\Controllers\MemberController@create");
Route::post('/MyEvents/add-new-member',"App\Http\Controllers\MemberController@addMember");
Route::get('/MyEvents/edit_member/{id}',"App\Http\Controllers\MemberController@edit");
Route::post('/MyEvents/update-member',"App\Http\Controllers\MemberController@update");

Route::get('/a', function(){
    return view('a');
});



