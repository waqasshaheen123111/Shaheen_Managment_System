<?php

namespace App\Models;

use App\Models\LibraryType;
use App\Models\LibraryAlbumDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LibraryAlbum extends Model
{
    use HasFactory;
    protected $table='library_albums';
    protected $fillable = [
        'type_id',
        'title',
        'parent_id',
        
        
    ];
    public function libraryType()
    {
        return $this->belongsTo(LibraryType::class);
    }
    public function library_album_details()
    {
        return $this->belongsTo(LibraryAlbumDetail::class);
    }

}
