<?php

namespace App\Models;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    protected $table='subjects';
    protected $fillable = [
        'name',
        
        
    ];
    public function classes(){
        return $this->belongsToMany(Grade::class,'subject_grade','class_id','subject_id');
    }
    
    
}
