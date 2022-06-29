<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Support\Facades\File;

class AdminController extends Controller{
    
    private $flash, $user;
    public function __construct(){
        $this->flash = null;
    }

    public function dashboard(){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        $this->user = session()->get('user');

        $hotelsCount = Hotel::count();
        $bookingCount = Booking::count();

        return view('admin.dashboard',[
            'flash' => $this->flash,
            'user' => $this->user,
            'pages' => 'Dashboard',
            'hotelsCount' => $hotelsCount,
            'bookingCount' => $bookingCount
        ]);
    }

    public function bookings(){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        $this->user = session()->get('user');

        $bookings = Booking::all();

        return view('admin.bookings',[
            'flash' => $this->flash,
            'user' => $this->user,
            'pages' => 'Manages Bookings',
            'bookings' => $bookings
        ]);
    }

    public function hotels(){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        $this->user = session()->get('user');

        $hotels = Hotel::all();

        return view('admin.hotels',[
            'flash' => $this->flash,
            'user' => $this->user,
            'pages' => 'Manages Hotels',
            'hotels' => $hotels
        ]);
    }

    public function action($id){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        $this->user = session()->get('user');

        $hotel = Hotel::where('id',$id)->get()->first();

        return view('admin.action',[
            'flash' => $this->flash,
            'user' => $this->user,
            'pages' => 'Update / Delete Hotel',
            'hotel' => $hotel
        ]);
    }

    public function updateValidity(Request $req){
        // return $req->input();
        // dd($req);
        // dd($req->file());
        $req->validate([
            'name' => 'required | string | max:30',
            'rating' => 'required | numeric | min:0 | max:5',
            'room' => 'required | numeric | min:0',
            'price' => 'required | numeric | min:0',
            'location' => 'required | string | max:30',
            'newImage' => 'mimes:png,jpg,jpeg | max:2048',
            'description' => 'required | string | max:1000'
        ]);

        if($req->file('newImage')){
            $imageName = 'hotels/'.$req->file('newImage')->getClientOriginalName();
            $req->newImage->move(public_path('hotels'),$imageName);
            File::delete(public_path($req->oldImage));
        }
        else
            $imageName = $req->oldImage;

        $respond = Hotel::where('id',$req->id)->update([
            'name' => $req->name,
            'rating' => $req->rating,
            'room' => $req->room,
            'price' => $req->price,
            'location' => $req->location,
            'image_link' => $imageName,
            'description' => $req->description
        ]);

        if($respond)
            session()->flash('flash','SUCCESSFULLY Update Hotel at ID '.$req->id);
        else
            session()->flash('flash','Failed Update Hotel at ID '.$req->id);
        
        return redirect('/admin/hotels');

    }
    
    public function delete($id){
        $deleteImage = Hotel::where('id',$id)->get()->first()->image_link;
        // dd($deleteImage);
        $respond = Hotel::where('id',$id)->delete();
        if($respond){
            File::delete(public_path($deleteImage));
            session()->flash('flash', 'SUCCESSFULLY Delete Hotel at ID '.$id);
        }
        else 
            session()->flash('flash', 'FAILED DELETE Hotel at ID '.$id);

        return redirect('/admin/hotels');
    }

    public function details($id){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        $this->user = session()->get('user');

        $hotel = Hotel::where('id',$id)->get()->first();

        return view('admin.details',[
            'flash' => $this->flash,
            'user' => $this->user,
            'pages' => 'Detail Hotels',
            'hotel' => $hotel
        ]);
    }

    public function insert(){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');

        $this->user = session()->get('user');

        return view('admin.insert',[
            'flash' => $this->flash,
            'user' => $this->user,
            'pages' => 'Insert New Hotel',
        ]);
    }

    public function insertValidity(Request $req){
        // dd($req);
        // return $req->input();

        $req->validate([
            'name' => 'required | string | max:30',
            'rating' => 'required | numeric | min:0 | max:5',
            'room' => 'required | numeric | min:0',
            'price' => 'required | numeric | min:0',
            'location' => 'required | string | max:30',
            'image' => 'required | mimes:png,jpg,jpeg | max:2048',
            'description' => 'required | string | max:1000'
        ]);
        $imageName = '';
        if($req->file('image')->isValid())
            $imageName = 'hotels/'.$req->file('image')->getClientOriginalName();
        
        $respond = Hotel::create([
            'name' => $req->name,
            'rating' => $req->rating,
            'room' => $req->room,
            'price' => $req->price,
            'location' => $req->location,
            'image_link' => $imageName,
            'description' => $req->description
        ]);

        if($respond){
            $req->file('image')->move(public_path('hotels'),$imageName);
            session()->flash('flash','Inserted new hotel named "'.$req->name.'"');
        }
        else{
            session()->flash('flash','Failed insert new hotel');
        }
        return redirect('admin/insert');

        // dd($imageName);
        // dd($req);
    }
}
