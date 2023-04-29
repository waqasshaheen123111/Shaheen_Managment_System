<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table='movies';
    protected $fillable=[
        'movie_name',
        'category',
        'actor_name',
      
    ];

}
