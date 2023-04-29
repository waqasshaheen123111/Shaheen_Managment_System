<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumCounter extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='album_counters';
    protected $fillable = [
        'type_id',
        'last_album_id',
        
        
    ];
}
