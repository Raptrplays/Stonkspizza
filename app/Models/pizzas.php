<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pizzas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function ingredients()
    {
        return $this->belongsToMany(ingredienten::class)->withPivot('quantity');;
    }

    public function orderitems()
    {
        return $this->hasMany(bestellingenitems::class);
    }

    public function price()
    {
        $price = 0;
        foreach ($this->ingredients as $ingredient)
        {
            $ingredientprice = $ingredient->price * $ingredient->pivot->amount;
            $price +=  $ingredientprice;
        }
        return $price;
    }

    public function pizza()
    {
        return $this->belongsTo(User::class);
    }
}
