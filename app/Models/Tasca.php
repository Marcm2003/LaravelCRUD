<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasca extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'completed',
        'description',
        'projecte_id'
    ];

    public function Projecte()
    {
        return $this->belongsTo(Projecte::class);
    }
}
