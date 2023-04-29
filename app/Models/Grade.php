<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;
    protected $table='classes';
    
    protected $fillable = [
        'name',
        'teacher_id'
        
    ];
    public function teachers(){
        return $this->belongsToMany(Teacher::class,'grade_teachers','class_id','teacher_id');
    }
    public function subjects(){
        return $this->belongsToMany(Subject::class,'subject_grade','class_id','subject_id');
    }
    public function student(){
        return $this->hasMany(Student::class);
    }
  
}
