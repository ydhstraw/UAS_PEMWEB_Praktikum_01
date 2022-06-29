@extends('layouts.app',[
'user' => $user
])

@section('content')
<br>
<div class="container">
    
    <div class="selectroom_top">
        
        <p style="padding-top: 1%"> </p>
        <h1>Invoice</h1><br>
        <p><b>Booking ID: </b> {{ $invoice->id }} </p>
        <p><b>Name: </b> {{ $invoice->name }} </p>
        <p><b>Email: </b> {{ $invoice->email }} </p>
        <p><b>Phone Number: </b> {{ $invoice->phone_number }} </p>
        <p><b>Hotel: </b> {{ $invoice->hotel }} </p>
        <p><b>Room: </b> {{ $invoice->room }} </p>
        <p><b>Price: </b> {{ $invoice->price }} </p>
        <p><b>Check In: </b> {{ $invoice->check_in }} </p>
        <p><b>Check Out: </b> {{ $invoice->check_out }} </p>  
        <br>
        <a href="/history"> Back to Booking History</a>
        <div class="clearfix"></div>
    </div>
    
</div>


@endsection
