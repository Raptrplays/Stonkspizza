<?php

namespace App\Models;

use app\Models\ingredienten;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class units extends Model
{
    use HasFactory;

    protected $table = 'eenheid';

    public $timestamps = false;

    public function ingredients()
    {
        return $this->hasMany(Ingredienten::class);
    }
}
