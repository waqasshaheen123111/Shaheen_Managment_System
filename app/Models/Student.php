<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=[
        'class_id',
        'status',
       
    ];
    public function user(){
        return $this->belongsTo(User::class);
        
    }
    public function parents(){
        return $this->belongsTo(Parent::class);
    }
    public function classes(){
        return $this->belongsTo(Grade::class);
    }
}
