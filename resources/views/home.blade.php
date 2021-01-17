@extends('layouts.mainpage')

@section('content')
<div class="container text-center">
    <div class="row">
    <h1>MY EVENTS</h1>
</div>
<br>
<div class="row">
    
    <div class="col"><input type="search" placeholder="search" style="width:200px;"></div>
    
</div>
<br>
<div>
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-1">
             <a href="/MyEvents/create_event"><button type="submit" class="btn btn-primary">Create</button></a>
        </div>
    </div>
</div>
<br>

<div style="text-align:left;">
<h3>Upcoming Events</h3>
</div>
<br>

<div class="row">
<div class="table-responsive" style="margin-bottom: 10%;">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Bil</th>
            <th scope="col">Event Name</th>
            <th scope="col">Event Date</th>
            <th scope="col">Location</th>
            <th scope="col" >Event Team</th>
            <th scope="col" >View</th>
            <th scope="col" >Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
            <th scope="row">1</th>
            <a href="/events/event_details/edit_detail">
            <td>Cultural Night</td></a>
            <td>12.12.2020</td>
            <td>UTM Johor</td>
            <td  scope="row"><a href="/MyEvents/manage_team"><button type="submit" class="btn btn-primary">Manage Team</button></a></td>
            <td><a href="/events/event_details/event_detail"><button type="button" class="btn btn-primary">View</button> </a></td>   
            <td> <button type="button" class="btn btn-danger">Delete</button></td>   
            
        </tr>
        </tbody>
    </table>
</div>
</div>

<div style="text-align:left;">
    <h3>Upcoming Events</h3>
</div>
<br>
<div class="row">
    <div class="table-responsive" style="margin-bottom: 5%;">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Bil</th>
                <th scope="col">Event Name</th>
                <th scope="col">Event Date</th>
                <th scope="col">Location</th>
                <th scope="col">Attended</th>
                <th scope="col" colspan="3">View Team</th>
                <th scope="col" >Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Cultural Night</td>
                <td>12.12.2020</td>
                <td>UTM Johor</td>
                <td>100</td>
                <td></td>
                <td ><a href="/MyEvents/view_team"><button type="button" class="btn btn-primary" >View Team</button></a></td>   
                <td></td>
                <td ><button type="button" class="btn btn-danger">Delete</button></td>  
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
