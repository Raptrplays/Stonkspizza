<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rechten extends Model
{
    use HasFactory;
    protected $table = 'rechten';
    protected $fillable = [
        'id',
        'name',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_roles', 'role_id', 'user_id');
    }
}
