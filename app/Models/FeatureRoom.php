<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeatureRoom extends Model
{
    use HasFactory;
    protected $table = "statut_room_features";

    public function feature()
    {
        return $this->belongsTo(Feature::class, 'feature_id');
    }

    public function statut()
    {
        return $this->belongsTo(Statut::class, 'statut_id');
    }
}
