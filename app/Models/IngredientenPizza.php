<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredientenpizza extends Model
{
    use HasFactory;
    protected $fillable = [
        'pizza_id',
        'ingredient_id',
        'amount'
    ];
    protected $table = "ingredient_pizza";
}
