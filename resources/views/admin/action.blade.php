@extends('layouts.admin',[
    'user' => $user,
    'pages' => $pages
])

@section('admin')

<!--grid-->
<div class="grid-form">

    <div class="grid-form1">
        <div style="margin: 0 17% 0 0" >
            <h3>Update / Delete Hotel
                <a href="/admin/hotels" class="btn pull-right" style="font-size: 24px">
                    <i class="fa fa-chevron-circle-left"></i>
                    Return
                </a>
            </h3>
        </div>
        
        @if ($flash)
        <div class="alert alert-info"><strong>{{ $flash }}</strong></div>    
        @endif
        
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                
                <form action="/admin/updateValidity" method="post" enctype="multipart/form-data" class="form-horizontal" >
                    @csrf
                    {{-- {{ $errors }} --}}

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-8">
                            <button type="submit" name="update" value="update" class="btn btn-success">Update</button>
                            <a href="/admin/delete/{{ $hotel->id }}" onclick="return confirm('Are you sure delete at ID {{ $hotel->id }}')" 
                                class="btn btn-danger">Delete</a>
                            
                        </div>
                    </div>

                    {{-- HOTEL ID --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ID</label>
                        <div class="col-sm-8">
                            <input type="text" name="id" value="{{ $hotel->id }}" class="form-control1" readonly>
                        </div>
                    </div>

                    {{-- HOTEL NAME --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hotel Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" value="{{ $hotel->name }}" class="form-control1">
                            {{ $errors->first('name') }}
                        </div>
                    </div>

                    {{-- RATING STAR --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Rating Star</label>
                        <div class="col-sm-8">
                            <input type="number" name="rating" value="{{ $hotel->rating }}" class="form-control1">
                            {{ $errors->first('rating') }}
                        </div>
                    </div>

                    {{-- ROOM AVAILABLE --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Room</label>
                        <div class="col-sm-8">
                            <input type="number" name="room" value="{{ $hotel->room }}" class="form-control1" placeholder="Room Available">
                            {{ $errors->first('room') }}
                        </div>
                    </div>

                    {{-- PRICE --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Price in IDR</label>
                        <div class="col-sm-8">
                            <input type="number" name="price" value="{{ $hotel->price }}" class="form-control1">
                            {{ $errors->first('price') }}
                        </div>
                    </div>

                    {{-- Location --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-8">
                            <input type="text" name="location" value="{{ $hotel->location }}" class="form-control1">
                            {{ $errors->first('location') }}
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control" rows="5" cols="50"><?= $hotel->description ?></textarea>
                            {{ $errors->first('description') }}
                        </div>
                    </div>

                    {{-- New IMAGE --}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">New Image</label>
                        <div class="col-sm-8">
                            <input type="file" name="newImage">
                            {{ $errors->first('newImage') }}
                        </div>
                    </div>
                    
                    <input type="hidden" name="oldImage" value="{{ $hotel->image_link }}">
                    {{-- OLD IMAGE --}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">OLD Image</label>
                        <div class="col-sm-8">
                            <img src="{{ asset($hotel->image_link) }}" width="350px">
                            
                        </div>
                    </div>
                    
                    {{-- <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" name="update" value="update" class="btn btn-primary">Update</button>
                        </div>
                    </div> --}}

                </form>
                
            <div class="panel-footer">

            </div>
        </div>
    </div>

</div>


@endsection

