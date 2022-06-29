@extends('layouts.app',[
    'user' => $user
])

@section('content')
{{-- Images terletak di public/css/style.css - line: 138 --}}

<div class="container">
    <br>
    
    <h1>
        Developers
    </h1>
    
    <div class="rom-btm">
        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
            <img src="{{ asset('teams/yudhis.jpg') }}" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
            <h4>Name: Yudhistira Aremaputra Wardhana</h4>
            <h6>NIM: 00000036572</h6>
            <p><b>Peran: Front end Developer</b> </p>
                
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container">
    
    <div class="rom-btm">
        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
            <img src="{{ asset('teams/rucci.png') }}" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
            <h4>Name: Norbertus Dewa Rucci</h4>
            <h6>NIM: 00000037417</h6>
            <p>
                <b>Peran: Full Stack Developer</b>
            </p>
                
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container">
    
    <div class="rom-btm">
        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
            <img src="{{ asset('teams/aryasuta.jpg') }}" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
            <h4>Name: Aryasuta</h4>
            <h6>NIM: 00000037714</h6>
            <p><b>Peran: Front End Developer</b> </p>
                
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="container">
    
    <div class="rom-btm">
        <div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
            <img src="{{ asset('teams/chill2.jpg') }}" class="img-responsive" alt="">
        </div>
        <div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
            <h4>Name: Arcrilles</h4>
            <h6>NIM: 00000037499</h6>
            <p><b>Peran: Back End Developer</b> </p>
                
        </div>
        <div class="clearfix"></div>
        </div>
    </div>
    <br>
</div>

@endsection