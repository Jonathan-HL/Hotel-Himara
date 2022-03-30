<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    public function category_room()
    {
        return $this->belongsTo(CategorieRoom::class, 'category_room_id');
    }

    public function tag_Rooms()
    {
        return $this->belongsToMany(tagRoom::class, "tag_rooms", "room_id");
    }

    public function features()
    {
        return $this->belongsToMany(Statut::class, "statut_room_features", "room_id" ,"feature_id");
    }
}
