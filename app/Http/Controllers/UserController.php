<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\File;

class UserController extends Controller{
    
    private $flash, $user;

    public function __construct(){
        $this->flash = null;
        $this->user = (object)[
            'name' => null
        ];
    }

    public function register(){
        return view('authentication.register',[
            'flash' => $this->flash
        ]);
    }
    public function registerValidity(Request $req){

        $req->validate([
            'name' => 'required | max:50',
            'phone' => 'required | max:20 | numeric',
            'birth' => 'required | date',
            'email' => 'required | email | max:50',
            'password' => 'required | confirmed | min:4',
            'image_link' => ' max:1080 | mimes:jpg,png,jpeg'
        ]);
        $imageName = '';
        if($req->file('image_link')){
            $imageName = 'users/'.$req->file('image_link')->getClientOriginalName();
            $req->file('image_link')->move(public_path('users'),$imageName);
        }
        else 
            $imageName = 'users/default_avatar.png';

        $respond = User::create([
            'role' => $req->role,
            'name' => $req->name,
            'email' => $req->email,
            'password' => md5($req->password),
            'birth_day' => $req->birth,
            'phone_number' => $req->phone,
            'image_link' => $imageName
        ]);
        if($respond){
            return redirect('/login');
        }
            
        else {
            session()->flash('flash','Something went wrong with Database Connetion');
            return redirect('/register');
        }
    }

    public function login(){
        if(session()->has('flash'))
            $this->flash = session()->get('flash');

        return view('authentication.login',[
            'flash' => $this->flash
        ]);
    }
    public function loginValidity(Request $req){
        $req->validate([
            'email' => 'required | email',
            'password' => 'required | min:4'
        ]);
        $user = User::where('email',$req->email)
            ->where('password',md5($req->password))
            ->get();
        
        if($user->containsOneItem()){
            session(['user'=>$user[0]]);
            if($user[0]->role == 'admin'){
                return redirect('/admin/dashboard');
            }
            else return redirect('/');
        }
        session()->flash('flash','Wrong email / password');
        return redirect('/login');
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
    
    public function profile(){
        $this->flash = session()->get('flash');
        if(session()->has('user'))
            $this->user = session()->get('user');

        return view('profile',[
            'flash' => $this->flash,
            'user' => $this->user
        ]);
    }

    public function profileUpdate(Request $req){
        
        $req->validate([
            'name' => 'required | max:50',
            'phone' => 'required | max:20 | numeric',
            'birth' => 'required | date',
            'email' => 'required | email | max:50',
            'newImage' => 'mimes:jpg,png,jpeg | max:1080'
        ]);
        
        $imageName = '';
        if($req->file('newImage')){
            $imageName = 'users/'.$req->file('newImage')->getClientOriginalName();
            File::delete(public_path($req->oldImage));
            $req->file('newImage')->move(public_path('users'),$imageName);
        }
        else
            $imageName = $req->oldImage;

        $respond = User::where('id',$req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'birth_day' => $req->birth,
            'phone_number' => $req->phone,
            'image_link' => $imageName
        ]);
        if($respond){
            session()->flash('flash','Profile Update Success');
            $currentUser = User::where('id',$req->id)->get()->first();
            session(['user'=>$currentUser]);
        }
        
        else
            session()->flash('flash','Profile Update Failed');
        
        return redirect('/profile');
    }
}

