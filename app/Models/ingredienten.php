<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredienten extends Model
{
    use HasFactory;
    protected $table = 'ingredienten';
    public $timestamps = false;


    public function pizzas()
    {
        return $this->belongsToMany(pizzas::class)->withPivot('quantity');
    }

    public function orderitems()
    {
        return $this->belongsToMany(bestellingenitems::class)->withPivot('quantity');
    }

    public function unit()
    {
        return $this->belongsTo(units::class);
    }
}
