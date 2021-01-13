@extends('layouts.mainpage')

@section('content')
    <div class="container">
        <!-- header start -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="eventheader">
                    <h1 class="mt-4 mb-2 mainpageheader">REGISTERED EVENTS</h1>
                </div>
            </div>
        </div>
        <!-- header end -->

        <!-- search bar start -->
        <div class="row mt-3 mb-4">
            <div class="d-flex flex-row-reverse">
                <div class="col-6 col-lg-4">
                <input class="form-control" id="myInput" type="text" placeholder=' Search..'></div>
            </div>
        </div>
         <!-- search bar end -->

        <!-- registered event list start -->
        <div class="row registeredborder align-items-center m-1" >
                <div class="col-md-3 d-none d-md-block ">
                        <img height="300px" width="250px" src="../image/avatar1.jpg" alt="avatar1" class="eventimage align-self-center" style="align-middle">     
                </div>
                <div class="col-md-6 ">
                <div class="table-responsive">
                    <table class="table">
                        
                    <tr>
                        <td>Event</td>
                        <td>:</td>
                        <td>Cultural Night</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>:</td>
                        <td>12/12/2021</td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td>:</td>
                        <td>02:00 PM</td>
                    </tr>
                    <tr>
                        <td>Venue</td>
                        <td>:</td>
                        <td>Dewan Sri Iskandar, UTM, Johor</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td>
                            Text m organizations use text messaging for communication between colleagues. In the 2010s, the sending of short informal messages
                        </td>
                    </tr>
                </table>
            </div>
            </div>
                <div class="col-md-3 align-self-end d-none d-md-block">
                    <button type="button"class="registeredbutton"><i class="fa fa-check"></i> &nbsp; &nbsp;Registered</button>
                </div>
            </div>

        </div>
        <!-- registered event list end -->
 
    </div>
@endsection
