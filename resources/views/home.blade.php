@extends('layouts.app',[
'user' => $user
])

@section('content')
{{-- Images terletak di public/css/style.css - line: 138 --}}
<div class="banner" style="background: url({{ asset('background/wp4676582.jpg') }}) no-repeat">
    <div class="container">
        <h1 class="wow zoomIn animated animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
            UAS Hotel Booking
        </h1>
    </div>
</div>

<!-- Search -->

<div class="container">
<h3 style="font-size: 2em; font-weight: 700; color: #34ad00; padding-top: 25px;">Search</h3><br>
</div>

<div class="container" style="padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;">
    <div class="search-box">
        

        <form action="/search" method="post">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label>Star</label>
                    <input type="number" name="rating" min="1" max="5" class="form-control" >
                </div>

                <div class="form-group col-md-6">
                    <label>Location</label>
                    <input type="text" name="location"  class="form-control" >
                </div>

                <div class="form-group col-md-6">
                    <label>Price Minimum</label>
                    <input type="number" name="priceMin" min="1" class="form-control" >
                </div>

                <div class="form-group col-md-6">
                    <label>Price Maximum</label>
                    <input type="number"  name="priceMax" min="1" class="form-control" >
                </div>

            </div>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>

    </div>
</div>


{{-- BOOKING HOTELS --}}
<div class="container" id="menuHotel">
    <div class="holiday">
        <h3>Hotel List</h3>
        @if ($flash!=null)
        <button class="btn btn-primary btn-block">{{ $flash }}</button>
        @endif
        @foreach ($hotels as $row)
        <div class="rom-btm">
            <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="{{ $row->image_link }}" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
                <h4>{{ $row->name }}</h4>
                <h6>Rating : {{ $row->rating }}</h6>
                <p><b>Hotel Location : {{ $row->location }}</b> </p>
                {{-- <p><b>Features</b> {{ substr($row->description, 15) }}</p> --}}
                <p><b>Features</b> <?= Str::substr($row->description, 0, 200)?> ....</p>
            </div>
            <div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
                <h5>Rp. {{ $row->price }} </h5>
                <a href="/details/{{ $row->id }}" class="view">Details</a>
                <a href="/details/{{ $row->id }}/#booking" class="view">Book Now</a>
            </div>
            <div class="clearfix"></div>
        </div>
        @endforeach

        <!--<div><a href="package-list.php" class="view">View More Packages</a></div>-->
    </div>
    <div class="clearfix"></div>
</div>

<div class="routes">

</div>

@endsection
