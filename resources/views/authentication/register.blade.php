@extends('layouts.auth')

@section('content')

<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">

                        <!--<div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://i.imgur.com/PSXxjNY.png"> </div>-->

                        <h3 class="mb-5 text-center heading">UAS Hotel Booking</h3>
                        <h6 class="msg-info">Please enter your information</h6>
                        @if ($flash)
                        {{ $flash }}
                        @endif
                        <form action="/registerValidity" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="customer" name="role">

                            {{-- NAME --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Full Name</label>
                                <input name="name" type="text" id="name" placeholder="" class="form-control">
                                <small class="error">{{ $errors->first('name') }}</small>
                            </div>

                            {{-- PHONE NUMBER --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Phone Number</label>
                                <input name="phone" type="text" id="phone" placeholder="" class="form-control">
                                <small class="error">{{ $errors->first('phone') }}</small>
                            </div>

                            {{-- BIRTH DAY --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Birthdate</label>
                                <input name="birth" class="form-control" type="date" value="" placeholder="Birth Date"
                                    style="margin-top: 10px;">
                                <small class="error">{{ $errors->first('birth') }}</small>
                            </div>

                            {{-- EMAIL --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Email</label>
                                <input name="email" type="text" id="email" placeholder="" class="form-control">
                                <small class="error">{{ $errors->first('email') }}</small>
                            </div>

                            {{-- PASSWORD --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Password</label>
                                <input name="password" type="password" id="password" placeholder=""
                                    class="form-control">
                                
                                <small class="error">{{ $errors->first('password') }}</small>
                                <div class="form-check" style="position: absolute; ">
                                    <input class="form-check-input" style="margin-left: -65px;" id="chkpsw" type="checkbox" onclick="showPassword()">
                                    <label class="form-check-label" style="font-size: 12px;" for="chkpsw">Show Password</label>
                                </div>
                            </div><br>
                            

                            {{-- CONFIRM PASSWORD --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Confirm Password</label>
                                <input name="password_confirmation" type="password" id="confirmPassword" placeholder="" class="form-control">
                                <div class="form-check" style="position: absolute; ">
                                    <input class="form-check-input" style="margin-left: -85px;"  id="chkcfpsw" type="checkbox" onclick="showConfirmPassword()">
                                    <label class="form-check-label" style="font-size: 12px;" for="chkcfpsw" >Show Confirm Pasword</label>
                                </div>
                            </div><br>

                            {{-- PROFILE IMAGE --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Photo Profile</label>
                                <input name="image_link" type="file" id="" class="form-control">
                                <small class="error">{{ $errors->first('image_link') }}</small>
                            </div>

                            <div class="row justify-content-center my-3 px-3">
                                <button name="register" type="submit" value="register"
                                    class="btn-block btn-color">Register</button>
                            </div>

                        </form>

                        <div class="row justify-content-center my-3 px-3">
                            
                            <a class="btn-block btn-color" href="/" style="text-align: center;">Back to Home</a>
                            
                        </div>
                        
                        {{-- <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Forgot Password?</small></a> </div> --}}

                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">
                        Already have account?
                        <a href="/login">
                            <button class="btn btn-white ml-2">Login</button>
                        </a>
                    </p>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">We are more than just a company</h3> 
                    <small class="text-white">    
                        Memanggil namamu ke ujung dunia<br>
                        Tiada yang lebih pilu<br>
                        Tiada yang menjawabku selain hatiku<br><br>
                    
                        Dan ombak berderu<br>
                        Di pantai ini kau slalu sendiri<br>
                        Tak ada jejakku di sisimu<br>
                        Namun saat ku tiba<br>
                        Suaraku memanggilmu akulah lautan<br><br>
                    
                        Ke mana kau s'lalu pulang<br>
                        Jingga di bahuku<br>
                        Malam di depanku<br>
                        Dan bulan siaga sinari langkahku<br><br>
                    
                        Ku terus berjalan<br>
                        Ku terus melangkah<br>
                        Kuingin kutahu engkau ada<br>
                        Memandangimu saat senja<br>
                        Berjalan di batas dua dunia<br><br>
                    
                        Tiada yang lebih indah<br>
                        Tiada yang lebih rindu<br>
                        Selain hatiku<br>
                        Andai engkau tahu<br>
                        Di pantai itu kau tampak sendiri<br>
                        Tak ada jejakku di sisimu<br><br>
                    
                        Namun saat kau rasa<br>
                        Pasir yang kau pijak pergi akulah lautan<br>
                        Memeluk pantaimu erat<br>
                        Jingga di bahumu<br>
                        Malam di depanmu<br><br>
                    
                        Dan bulan siaga sinari langkahmu<br>
                        Teruslah berjalan<br>
                        Teruslah melangkah<br>
                        Ku tahu kau tahu aku ada<br><br>

                        Roxane oh Roxanee ............
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function showConfirmPassword() {
        var x = document.getElementById("confirmPassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
@endsection
