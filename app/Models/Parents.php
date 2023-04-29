<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $table='parent';
    protected $fillable=[
        'student_id',
        'phone',
        'adress',
        'status',
    ];
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
        
    }
}
