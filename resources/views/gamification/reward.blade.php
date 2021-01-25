<!doctype html>
<html lang="en">
  <head>
    <title>Reward</title>
    @extends("layouts.navigation_bar")
    @section("content")
    <div class="container">
        <div class="row mt-3 mb-3">
            <h1 style="font-size:20px;">Reward</h1>
        </div>
        <div class="jumbotron" style="background-color: light-gray;">
            <div class="row d-flex justify-content-end mr-5 mb-3">
                <p>Available reward point : {{$rewardPoint}}</p>
            </div>
            @if(session('message'))    
                    <div class="alert alert-danger alert-dismissible fade-in text-center mt-3">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <p class="mb-0">{{ session('message')}}</p>
                    </div>
            @endif
            <div class="card border-info mb-3" style="width: 100%;">
                <div class="card-header">Invitation Card 1</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img style="width: 50px; height: 100px;" src="{{ URL::asset('assets/img/invitation_card/invitation-card-1.jpg') }}" alt="Invitation card">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">Required reward points: 1000 points</p>
                            <p class="card-text">2 invitation card design per event.</p>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <p class="card-text">
                                @if($user->invitation_card_amount == 1) 
                                    <button type="button" class="btn btn btn-success"><a class="my-btn-link disabled" href="/gamification/exchange-reward/1">Exchange</a></button>
                                @else
                                    <button type="button" class="btn btn btn-success" disabled>Exchange</button>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-info mb-3" style="width: 100%;">
                <div class="card-header">Invitation Card 2</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img style="width: 50px; height: 100px;" src="{{ URL::asset('assets/img/invitation_card/invitation-card-1.jpg') }}" alt="Invitation card">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">Required reward points: 1500 points</p>
                            <p class="card-text" >3 invitation card design per event.</p>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <p class="card-text">
                                @if($user->invitation_card_amount == 2) 
                                <button type="button" class="btn btn btn-success"><a class="my-btn-link disabled" href="/gamification/exchange-reward/2">Exchange</a></button>
                                @else
                                <button type="button" class="btn btn btn-success" disabled>Exchange</button>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-info mb-3" style="width: 100%;">
                <div class="card-header">Invitation Card 3</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <img style="width: 50px; height: 100px;" src="{{ URL::asset('assets/img/invitation_card/invitation-card-1.jpg') }}" alt="Invitation card">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">Required reward points: 3000 points</p>
                            <p class="card-text">4 invitation card design per event.</p>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <p class="card-text">
                                @if($user->invitation_card_amount == 3) 
                                    <button type="button" class="btn btn btn-success"><a class="my-btn-link disabled" href="/gamification/exchange-reward/3">Exchange</a></button>
                                @else
                                    <button type="button" class="btn btn btn-success" disabled>Exchange</button>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-end" >
                <button type="button" class="btn btn-primary"><a href="/gamification/gamification_profile" class="my-btn-link" style="font-size:20px;">Back</a></button>
            </div>
        </div>
    </div>
    
    <!--<h1>Reward</h1>
    <br><br>
    <div class="container-fluid">
        <div class="row" style="text-align:center;margin-bottom:80px;">
            <div class="col">
                <input type="search" placeholder="search" style="width:300px;height:50px;">
            </div>
        </div>

        <div class="row" style="text-align:center;">
            <div class="col-sm-8" >
            </div>
            <div class="col">
                <div class="container" style="padding-right:20%;padding-left:20%;">
                    <h5 style="background-color:lightgray;border-radius:100px;padding-top:5%;padding-bottom:5%;">Available point : 3000</h5>
                </div>
                <br>
                <div class="container" style="padding-right:20%;padding-left:20%;">
                    <button type="button" class="btn btn-primary"><a href="/gamification/gamification_profile" class="my-btn-link" style="font-size:20px;">Back</a></button>
                </div>

            </div>

            
        </div>
            <br>
            <br>
            <div class="container-fluid" style="background-color:lightgray ">
                <div class="table-responsive" style="margin-bottom:5%;">
                    <table class="table" style="text-align:center;">
                        <thead>
                            <tr>
                                <th scope="col" style="text-decoration: underline;" colspan="3">Name</th>
                                <th scope="col" style="text-decoration: underline;">Quantity</th>
                                <th scope="col" style="text-decoration: underline;">Required points</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding-top:2%;" colspan="3">
                                    <img  src="{{ URL::asset('assets/img/achievement.png') }}" style="width:100px;height:80px;"><br>
                                    <p>Invitation card 1</p>
                                </td>
                                <td style="padding-top:70px;">50</td>
                                <td style="padding-top:70px;">3500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
           
    </div>
    
    -->

    @endsection