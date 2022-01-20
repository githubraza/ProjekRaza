<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public function building(){
        return $this->hasMany(Building::class, "id", "prop_id");
    }
    public function user(){
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
