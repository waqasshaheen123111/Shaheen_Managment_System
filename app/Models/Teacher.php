<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $table='teacher';
    protected $fillable = [
        'contact',
        'status',
        'qualification',
        
    ];
    public function user(){
        return $this->belongsTo(User::class);
        
    }
     public function classes(){
        return $this->belongsToMany(Grade::class,'grade_teachers','class_id','teacher_id');
    }
}
