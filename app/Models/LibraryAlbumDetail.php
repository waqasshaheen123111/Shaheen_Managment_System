<?php

namespace App\Models;

use App\Models\LibraryAlbum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LibraryAlbumDetail extends Model
{
    use HasFactory;
    protected $table='library_album_details';
    protected $fillable=[
        'library_album_id',
        'filename',
    ];
    public function library_album(){
        return $this->belongsTo(LibraryAlbum::class);
    }
    
}
