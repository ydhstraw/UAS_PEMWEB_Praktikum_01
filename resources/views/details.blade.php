@extends('layouts.app',[
    'user' => $user
])

@section('content')

<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" />
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script>

    $(function () {
        $("#datepicker, #datepicker1").datepicker();
    });

</script>
<style>
    .errorWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #dd3d36;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

    .succWrap {
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    }

</style>
{{-- Images terletak di public/css/style.css - line: 800 --}}
<div class="banner-3" style="background: url({{ asset('background/wp4676582.jpg') }}) no-repeat">
    <div class="container">
        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Hotel Details </h1>
    </div>
</div>

<!--- selectroom ---->
<div class="selectroom">
    <div class="container">

        <div class="selectroom_top">
            <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="{{ asset($hotel->image_link) }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                <h2>{{ $hotel->name }}</h2>
                <p class="dow">Id: {{ $hotel->id }}</p>
                <p><b>Rating :</b> {{ $hotel->rating }} </p>
                <p><b>Price :</b> {{ $hotel->price }} </p>
                <p><b>Available Room :</b> {{ $hotel->room }} </p>
                <p><b>Location :</b> {{ $hotel->location }} </p>                
            </div>
            <h3>Hotel Details</h3>
            <p style="padding-top: 1%">{{ $hotel->description }}</p>
            <div class="clearfix"></div>
        </div>

        {{-- BOOKING --}}
        <form action="/booking" method="post">
            @csrf
            <div id="booking" class="selectroom_top">
                <h2>Booking</h2>
                <br><br>
                <input type="hidden" name="id_hotel" value="{{ $hotel->id }}">
                <input type="hidden" name="id_user" value="{{ $user->id }}">
                <div class="">
                    <label class="inputLabel">Guest Full Name</label>
                    <input type="text" name="name">
                    <p style="color: red">{{ $errors->first('name') }}</p>
                </div>
                <br><br>
                <div>
                    <label class="inputLabel">Number Phone</label>
                    <input type="text" name="phone">
                    <p style="color: red">{{ $errors->first('phone') }}</p>
                </div>
                <br><br>
                <div>
                    <label class="inputLabel">Email Guest</label>
                    <input type="text" name="email">
                    <p style="color: red">{{ $errors->first('email') }}</p>
                </div>
                <br><br>
                
                {{-- CALENDER --}}
                <div class="ban-bottom">
                    <div class="bnr-right">
                        <label class="inputLabel">Check In</label>
                        <input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy" 
                            name="check_in" onchange="calculateTotalPrice();" required="">
                    </div>
                    <div class="bnr-right">
                        <label class="inputLabel">Check Out</label>
                        <input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" 
                            name="check_out" onchange="calculateTotalPrice();" required="">
                    </div>
                </div>
                <p id="warning" style="color: red"></p>
                <p style="color: red">{{ $errors->first('check_in') }}</p>
                <p style="color: red">{{ $errors->first('check_out') }}</p>
                <br><br>
                <div>
                    <label class="inputLabel">Number of Rooms</label>
                    <input type="text" name="room" id="room" value="0"
                        oninput="calculateTotalPrice();">
                        <p style="color: red">{{ $errors->first('room') }}</p>
                </div>
                <br><br>
                <div>
                    <label class="inputLabel">Duration (days)</label>
                    <input type="text" name="duration" id="day" value="0" readonly>
                </div>

                <br><br>

                <div>
                    <label class="inputLabel">Grand Total</label>
                    <input type="text" name="total" id="total" value="0" readonly>
                </div>

                <button type="submit" name="booking" value="booking"class="btn btn-primary btn-block" >Booking</button>
            </div>
            
        </form>
    </div>
</div>

<script>
    const price = @json($hotel->price);
    console.log(price);
    
    $(document).ready(calculateTotalPrice());

    function calculateTotalPrice(){
        var date1 = $('#datepicker').val();
        var date2 = $('#datepicker1').val();
        let room = $('#room').val();
        let difference = '';
        
        // console.log(date1);
        // console.log(date2);

        if (date1 != '' && date2 != '') {
            const date1Obj = new Date(date1);
            const date2Obj = new Date(date2);

            difference = (date2Obj - date1Obj) / (1000 * 3600 * 24);
            $('#day').val(difference);
            $('#total').val(difference * price * room);
            console.log('Calculate Complete');

            if(difference < 0){
                $('#warning').html('Pick date in calender correctly please :)');
                $('#datepicker').val('');
                $('#datepicker1').val('');
                $('#day').val(0);
            }   
            else
                $('#warning').html('');
        }
        console.log(difference+' days');
        console.log(room+' room');
    }

</script>

@endsection
