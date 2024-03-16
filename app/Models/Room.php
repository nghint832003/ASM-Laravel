<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = "room";
    protected $fillable = ['id','name','status_room','price','roomType_id','address','description','id_image',];
}
