<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    use HasFactory;
    protected $table = "room_type";
    protected $fillable = ['id','name','quantity_people','quantity_bed',''];
}
