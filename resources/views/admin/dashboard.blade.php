@extends('layouts.admin',[
'user' => $user,
'pages' => $pages
])

@section('admin')


<div class="four-grids">
    <div class="col-md-3 four-grid">
        
        <a href="hotels">
            <div class="four-agileits">
                <div class="four-text">
                    <h3>Hotel</h3>
                    <h4> {{ $hotelsCount }} </h4>
                </div>
            </div>
        </a>
        <br>
    </div>

    <div class="col-md-3 four-grid">
        <a href="bookings">
            <div class="four-agileinfo">
                <div class="four-text">
                    <h3>Booking</h3>
                    <h4> {{ $bookingCount }} </h4>
                </div>
            </div>
        </a>
    </div>
    
</div>

@endsection
