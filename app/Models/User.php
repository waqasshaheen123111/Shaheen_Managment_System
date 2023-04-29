<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Student;
use App\Models\Teacher;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'dob',
        'mobile',
        'adress',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function teachers(){
        return $this->belongsTo(Teacher::class,'id','user_id');
    }
    public function student(){
        return $this->belongsTo(Student::class,'id','user_id');
    }
    public function parent(){
        return $this->belongsTo(Parents::class,'id','user_id');
    }
  
    public function images(){
        return $this->hasMany(Image::class);
    }
}
