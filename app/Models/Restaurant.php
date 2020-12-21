<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adress',
        'oib',
        'neighborhood_id'
    ];
    public function neighborhood(){return $this->belongsTo(Neighborhood::class);}
    public function orders(){return $this->belongsToMany(Order::class);}
}
