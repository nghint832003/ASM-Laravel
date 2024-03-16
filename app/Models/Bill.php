<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table = "bill";
    protected $fillable = ['id','customer_id','room_id','booking_date','checkOut_date'];
}
