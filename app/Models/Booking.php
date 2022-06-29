<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['id','id_user','id_hotel','name','email','room','price','phone_number','check_in','check_out'];

    public $timestamps = false;
}
