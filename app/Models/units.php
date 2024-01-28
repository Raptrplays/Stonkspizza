<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\ingredienten;

class units extends Model
{
    use HasFactory;
    protected $table = 'eenheid';
    public $timestamps = false;

    public function ingredients() {
        return $this->hasMany(Ingredienten::class);
    }
}
