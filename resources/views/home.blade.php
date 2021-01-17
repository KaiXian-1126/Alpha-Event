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
    <button type="submit" class="btn btn-primary">Create</button>
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
            <th scope="col" >Edit</th>
            <th scope="col" >Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Cultural Night</td>
            <td>12.12.2020</td>
            <td>UTM Johor</td>
            <td  scope="row"><button type="submit" class="btn btn-primary">Manage Team</button></td>
            <td><button type="button" class="btn btn-primary">Edit</button> </td>   
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
                <td ><button type="button" class="btn btn-primary" >View Team</button></td>   
                <td></td>
                <td > <button type="button" class="btn btn-danger">Delete</button></td>  
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
