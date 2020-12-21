<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    public function city(){return $this->belongsTo(City::class);}
    public function stores(){return $this->hasMany(Store::class);}
    public function restaurants(){return $this->hasMany(Restaurant::class);}
   
}
