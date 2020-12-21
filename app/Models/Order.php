<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quantity',
        'user_id',
        'restaurant_id',
        'store_id',
        'deliverer_id'

    ];
    public function store(){return $this->belongsTo(Store::class);}
    public function restaurant(){return $this->belongsTo(Restaurant::class);}
    public function deliverer(){return $this->belongsTo(Deliverer::class);}
    public function user(){return $this->belongsTo(User::class);}
}
