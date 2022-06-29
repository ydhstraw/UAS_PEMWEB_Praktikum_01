<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Hotel;

class HomeController extends Controller{
    
    private $flash, $user; 

    public function __construct(){
        $this->flash = null;
        $this->user = (object)[
            'name' => null
        ];
    }

    public function home(){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        if(session()->has('user'))
            $this->user = session()->get('user');
        if(session()->has('hotels'))
            $hotels = session()->get('hotels');
        else
            $hotels = Hotel::all();
            // $hotels = Hotel::inRandomOrder()->limit(4)->get();

        return view('home',[
            'flash' => $this->flash,
            'user' => $this->user,
            'hotels' => $hotels
        ]);
    }

    public function search(Request $req){
        // dd($req->input());
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        if(session()->has('user'))
            $this->user = session()->get('user');

        if($req->priceMin==null) $req->priceMin = 1;
        if($req->priceMax==null) $req->priceMax = 10000000;
        // if($req->rating==null) $req->rating = 'is not null';

        $hotels = Hotel
            ::where('rating','LIKE',$req->rating)
            ->WhereBetween('price',[$req->priceMin, $req->priceMax])
            ->where('location','LIKE',$req->location)
            ->get();
            // ->dd();
        
        // dd($hotels);

        // dd($hotels->count());

        if($hotels){
            session()->flash('hotels',$hotels);
            session()->flash('flash',$hotels->count().' query result');
        }
        else session()->flash('flash','No query result');

        return redirect('/#menuHotel');
    }

    public function invoice($id){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        if(session()->has('user'))
            $this->user = session()->get('user');

        $invoice = Booking
            ::where('id',$id)
            ->get()->first();
        
        $invoice->hotel = Hotel::where('id',$invoice->id_hotel)->get()->first()->name;
        
        return view('invoice',[
            'flash' => $this->flash,
            'user' => $this->user,
            'invoice' => $invoice
        ]);
    }

    public function history(){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        if(session()->has('user'))
            $this->user = session()->get('user');
        
        $bookings = Booking::where('id_user',$this->user->id)->get();

        foreach($bookings as $item)
            $item->hotel = Hotel::select('name')->where('id',$item->id_hotel)->get()->first()->name;
        
        return view('history',[
            'flash' => $this->flash,
            'user' => $this->user,
            'bookings' => $bookings
        ]);
    }

    public function details($id){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        if(session()->has('user'))
            $this->user = session()->get('user');
        
        $hotel = Hotel::where('id',$id)->get()->first();

        return view('details',[
            'flash' => $this->flash,
            'user' => $this->user,
            'hotel' => $hotel,
        ]);
    }

    public function booking(Request $req){
        
        $req->validate([
            'id_hotel' => 'required',
            'id_user' => 'required',
            'name' => 'required | string | max:30',
            'phone' => 'required | string | max:30',
            'email' => 'required | email | max:30',
            'check_in' => 'required | date',
            'check_out' => 'required | date',
            'room' => 'required | numeric | min:0 | max:10',
            'duration' => 'required | numeric | min:0',
            'total' => 'required | numeric | min:0'
        ]);
        
        // dd($req->input());
        
        $respond = Booking::create([
            'id_hotel' => $req->id_hotel,
            'id_user' => $req->id_user,
            'name' => $req->name,
            'email' => $req->email,
            'room' => $req->room,
            'price' => $req->total,
            'phone_number' => $req->phone,
            'check_in' => $req->check_in,
            'check_out' => $req->check_out
        ]);
        
        if($respond){
            // dd($respond->id);
            // $idTemp = Booking::select(['id'])->where('')
            session()->flash('flash','Booking successfully added');
        }
            
        else 
            session()->flash('flash','Something wrong with booking system');

        return redirect('/invoice/'.$respond->id);

    }

    public function aboutUs(){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');
        if(session()->has('user'))
            $this->user = session()->get('user');
        
        return view('aboutUs',[
            'flash' => $this->flash,
            'user' => $this->user,
        ]);
    }

}
