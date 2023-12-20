<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ingredientenpizza extends Model
{
    use HasFactory;
    protected $table = 'ingredienten_van_pizza';
    protected $fillable = [
        'pizza_id',
        'ingredient_id',
        'amount'
    ];
}
