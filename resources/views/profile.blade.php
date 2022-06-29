@extends('layouts.app',[
'user' => $user
])

@section('content')

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
    p{
        width: 350px;
    }
</style>

<div class="privacy">
    <div class="container">
        
        
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Change User Details</h3>
        
        @if ($flash!=null)
        <small style="color: red;">{{ $flash }}</small>
        @endif
        <form action="/profileUpdate" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}" class="form-control">
            <input type="hidden" name="oldImage" value="{{ $user->image_link }}" class="form-control" >

            {{-- <div class="errorWrap"><strong>ERROR</strong> : </div>
            <div class="succWrap"><strong>SUCCESS</strong> :  </div> --}}

            <p>
                <b>Full Name</b> 
                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="name" required="">
                {{ $errors->first('name') }}
            </p>

            <p>
                <b>Phone Number</b>
                <input type="text" name="phone" value="{{ $user->phone_number }}" class="form-control">
                {{ $errors->first('phone') }}
            </p>

            <p>
                <b>Birth Day</b>
                <input type="date" name="birth" value="{{ $user->birth_day }}" class="form-control">
                {{ $errors->first('birth') }}
            </p>
            <p>
                <b>Email</b>
                <input type="text" name="email" value="{{ $user->email }}" readonly class="form-control">
                {{ $errors->first('email') }}
            </p>
            <p>
                <b>New Image</b>
                <input type="file" name="newImage" class="form-control" >
                {{ $errors->first('image_link') }}
            </p>
            <img style="width: 350px" src="{{ asset($user->image_link) }}">
            <p>
                <button type="submit" name="submit" value="update" class="btn-primary btn">Update Change</button>
            </p>
        </form>


    </div>
</div>

@endsection
