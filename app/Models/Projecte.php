<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projecte extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug'
    ];

    public function Tasca()
    {
        return $this->hasMany(Tasca::class);
    }

}
