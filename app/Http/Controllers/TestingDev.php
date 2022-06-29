<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestingDev extends Controller{
    
    public function testConnection(){
        return User::all();
    }

    public function getSession(){
        return session()->all();
    }
    
    public function deleteSession(){
        session()->flush();
        return session()->all();
    }
}
