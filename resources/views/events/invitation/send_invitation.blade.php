@extends("layouts.eventsidebar" , ["id"=>$data['id']->Event_id])
@section("content")

<!-- Main Content -->
<div class="col-md-9"> 
    <div class="container">
        <div class="row">
            <!-- col start -->
            
            <div class="col-sm-8" >
                <div class="container" style= "padding-right:10%; ">
                    <br><br>
                <h1 style="font-size: 30px">{{$data['event']->Event_name}}</h1>
                <br><br>
                <div class="container" style="border:1px solid black;margin-bottom:10%;" >
                    <br><br>
                    <div class="container" style="border:1px solid black; width:95%;height:200px;padding:0%;">
                        <p><img src="{{asset('image')}}/{{$data['id']->Image}}" style="width: 100%;height:100%" /></p>
                    </div>
                    <br>
                    <br>
                    <p>{!!$data['id']->Text!!}</p>
                    <br>
                    </div>
                    <br>
                    <br>
                </div>
                
            </div>
            
            <div class="col-sm-3" style="margin-bottom:10%;">
                <div class="container" style="margin-top:30%;border:1px solid black;padding-top:10%;padding-bottom:10%;text-align:center;">
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

                <select name="guest" id="guest" style="width:200px;font-size:30px; display:none;">
                    <option disabled selected>--- SELECT ---</option>
                    @foreach($data['guest_id'] as $key =>$guest)
                        @foreach($data['user'] as $key1 =>$name)
                            @if($guest->Guest_id==$name->id)
                                    <option value="{{$guest->Guest_id}}">{{$name->name}}</option>
                            @endif
                        @endforeach
                    @endforeach
                    
                </select>
               

                

                
                <select name="guestList" id="guestList" style="width:200px;font-size:30px;">
                    <option disabled selected>--- SELECT ---</option>
                    @foreach($data['guest_id'] as $key =>$value)
                    <option value="{{$value->Guest_list}}">{{$value->Guest_list}}</option>
                    @endforeach
                </select>
                <br><br>

                <div class="row">
                
                <div class="col">
                <button type="button" class="btn btn-primary"><a href="/events/invitation/edit_invitation/{{$data['event']->Event_id}}" style="color:white;">Back</a></button>
                </div>

                <div class="col">
                <button type="submit" class="btn btn-primary">Send</button>
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
    
 </script>