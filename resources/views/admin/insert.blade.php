@extends('layouts.admin',[
    'user' => $user,
    'pages' => $pages
])

@section('admin')

<!--grid-->
<div class="grid-form">

    <div class="grid-form1">
        <h3>Create Package</h3>
        @if ($flash)
        <div class="alert alert-info"><strong>{{ $flash }}</strong></div>    
        @endif
        
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                
                <form action="/admin/insertValidity" method="post" enctype="multipart/form-data" class="form-horizontal" >
                    @csrf
                    {{-- HOTEL NAME --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Hotel Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control1" placeholder="Hotel Name">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                    
                    {{-- RATING STAR --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Rating Star</label>
                        <div class="col-sm-8">
                            <input type="number" name="rating" class="form-control1" placeholder="Rating 1 - 5 star">
                            {{ $errors->first('rating') }}
                        </div>
                    </div>

                    {{-- ROOM AVAILABLE --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Room</label>
                        <div class="col-sm-8">
                            <input type="number" name="room" class="form-control1" placeholder="Room Available">
                            {{ $errors->first('room') }}
                        </div>
                    </div>

                    {{-- PRICE --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Price in IDR</label>
                        <div class="col-sm-8">
                            <input type="number" name="price" class="form-control1" placeholder="Price / night">
                            {{ $errors->first('price') }}
                        </div>
                    </div>

                    {{-- Location --}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-8">
                            <input type="text" name="location" class="form-control1" placeholder="Location">
                            {{ $errors->first('location') }}
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-8">
                            <textarea name="description" class="form-control" rows="5" cols="50" placeholder="Hotel description" ></textarea>
                            {{ $errors->first('description') }}
                        </div>
                    </div>

                    {{-- IMAGE --}}
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Image Hotel</label>
                        <div class="col-sm-8">
                            <input type="file" name="image">
                            {{ $errors->first('image') }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button type="submit" name="insert" value="insert" class="btn btn-primary">Create</button>

                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                </form>
            <div class="panel-footer">

            </div>
        </div>
    </div>

</div>

@endsection
