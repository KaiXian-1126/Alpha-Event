@extends("layouts.event" , ["id"=>$data['id']->Event_id])
@section("content")

<!-- Main Content -->
<div class="col-md-9"> 
    <div class="container">
        <div class="row">
            <!-- col start -->
            
            <div class="col-sm-8" >
                <div class="container" style= "padding-right:10%; ">
                    <br><br>
                    <h1 style="text-align:center;">{{$data['event']->Event_name}}</h1>
                <br><br>
                <div class="container" style="background-color:rgba(142, 192, 248, 0.9);margin-bottom:10%;border-radius:2%;" >
                    <br><br>
                    <div class="container" style="width:95%;height:200px;padding:0%;">
                        <p><img src="{{asset('image')}}/{{$data['id']->Image}}" style="width: 100%;height:100%" /></p>
                    </div>
                    <br>
                    <br>
                    <div class="container-fluid" style="background-color:rgba(204, 242, 248, 0.4);">
                        <br>
                        <p>{!!$data['id']->Text!!}</p>
                        <br>
                    </div>
                    <br>
                    </div>
                    <br>
                    <br>
                </div>
                
            </div>
            
            <div class="col-sm-3" style="margin-bottom:10%;">
                <div class="container" style="margin-top:30%;padding-top:10%;padding-bottom:10%;text-align:center;background-color:rgba(107, 207, 223, 0.9);">
                <h1 style="font-size: 16px;text-decoration:underline;">Send invitation</h1>
                <br><br>
                <p>Send to</p>
                <form action="/send-invitation/{{$data['id']->Event_id}}/{{$data['id']->Invitation_id}}" method="post">
                    {{ csrf_field() }}
                <select name="guest_type" id="guest_type" style="width:200px;font-size:30px;" onchange="Checking()">
                    <option value="guestList">Guest List</option>
                    <option value="guest">Guest</option>
                </select>

                <br>
                <br>

                <select name="guest" id="guest" style="width:200px;font-size:30px; display:none;" onchange="oncheck()">
                    <option disabled selected>--- SELECT ---</option>
                    @foreach($data['guest_id'] as $key =>$guest)
                        @foreach($data['user'] as $key1 =>$name)
                            @if($guest->Guest_id==$name->id)
                                    <option value="{{$guest->Guest_id}}">{{$name->name}}</option>
                            @endif
                        @endforeach
                    @endforeach
                    
                </select>
               

                

                
                <select name="guestList" id="guestList" style="width:200px;font-size:30px;" onchange="oncheck()">
                    <option disabled selected>--- SELECT ---</option>
                    @foreach($data['guestList'] as $key =>$value)
                    <option value="{{$value->Guest_list}}">{{$value->Guest_list}}</option>
                    @endforeach
                </select>
                <br><br>

                <div class="row">
                
               
                <div class="col">
                <button type="button" class="btn btn-primary"><a href="/events/invitation/edit_invitation/{{$data['event']->Event_id}}" style="color:white;"
                >Back</a></button>
                </div>

                <div class="col">
                <button type="submit" id="send" class="btn btn-primary" disabled >Send</button>
                </div>

                </div>
                 

                



            </form>
            </div>
            </div>

            <div>
                
            </div>
        </div>
    </div>
           
        
        <!-- col end -->
            
        
    
</main>

@endsection

</html>

<script>

    function Checking() {
        if (document.getElementById('guest_type').value=="guestList") {
            document.getElementById('guest').style.display = 'none';
            document.getElementById('guest').value = null;
            document.getElementById('guestList').style.display = 'inline-block';

        } else if(document.getElementById('guest_type').value=="guest") {
            document.getElementById('guest').style.display = 'inline-block';
            document.getElementById('guestList').style.display = 'none';
            document.getElementById('guestList').value = null;
        }
    }

    function oncheck(){
        if(document.getElementById('guest').value==""&&document.getElementById('guestList').value==""){

            document.getElementById('send').disabled=true;
        }

        else{
            document.getElementById('send').disabled=false;
        }
    }
    
 </script>