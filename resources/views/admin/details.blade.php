@extends('layouts.admin',[
    'user' => $user,
    'pages' => $pages
])

@section('admin')

<a href="/admin/hotels" class="btn btn-primary btn-block">Return</a>

<p>{{ $hotel->id }}</p>
<p>{{ $hotel->name }}</p>
<p>{{ $hotel->rating }}</p>
<p>{{ $hotel->room }}</p>
<p>{{ $hotel->price }}</p>
<p>{{ $hotel->location }}</p>
<p>{{ $hotel->description }}</p>

<img src="{{ asset($hotel->image_link) }}">

@endsection

