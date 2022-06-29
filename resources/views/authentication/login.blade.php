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
                        <h6 class="msg-info">Please login to your account</h6>
                        @if ($flash)
                            {{ $flash }}
                        @endif
                        <form action="/loginValidity" method="POST">
                            @csrf

                            {{-- EMAIL --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Email</label>
                                <input name="email" type="text" id="email"  class="form-control">
                                {{ $errors->first('email') }}
                            </div>
    
                            {{-- PASSWORD --}}
                            <div class="form-group">
                                <label class="form-control-label text-muted">Password</label>
                                <input name="password" type="password" id="password"  class="form-control">
                                {{ $errors->first('password') }}
                                

                                <div class="form-check" style="position: absolute; ">
                                <input class="form-check-input" style="margin-left: -60px;" type="checkbox" id="psw" onclick="showPassword()">
                                <label class="form-check-label" for="psw" style="font-size: 12px;">Show Pasword</label>
                                
                                </div>
                                
                            </div>

                            <div class="row justify-content-center my-3 px-3">
                                <button name="login" type="submit" value="login" class="btn-block btn-color">Login</button>
                            </div>
                        </form>
                        
                        <div class="row justify-content-center my-3 px-3">
                            
                            <a class="btn-block btn-color" href="/" style="text-align: center;">Back to Home</a>
                            
                        </div>

                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <p href="#" class="sm-text mx-auto mb-3">Don't have an account?
                        <a href="/register">
                            <button class="btn btn-white ml-2">Create new</button>
                        </a>
                        
                    </p>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">We are more than just a company</h3>
                    <small class="text-white">
                        Aku ingin mencintaimu dengan sederhana <br>
                        dengan kata yang tak sempat diucapkan <br>
                        kayu kepada api yang menjadikannya abu <br> <br>
                    
                        Aku ingin mencintaimu dengan sederhana <br>
                        dengan isyarat yang tak sempat disampaikan <br>
                        awan kepada hujan yang menjadikannya tiada. <br> <br>

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
</script>
@endsection