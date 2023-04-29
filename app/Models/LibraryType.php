<?php

namespace App\Models;

use App\Models\LibraryAlbum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LibraryType extends Model
{
    use HasFactory;
    protected $table='library_types';
    protected $fillable = [
        'name',
        
        
    ];
    public function libraryAlbums()
    {
        return $this->hasMany(LibraryAlbum::class);
    }
}
