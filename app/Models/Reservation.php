<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function category(){
            return $this->belongsTo(categorieRoom::class, 'category_room_id');
    }
}
