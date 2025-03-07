<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'prenom',
        'email',
        'password',
        'date_de_naissance',
        'CIN',
        'Phone_numbre',
        'campus',
        'role_id',
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
    public function role (){
        return $this->belongsTo(Role::class);
    }

    public function quizhistory (){
        return $this->hasMany(QuizHistory::class);
    }
    public function quizResults (){
        return $this->hasMany(QuizResult::class,'candidat_id');
    }
    public function events (){
        return $this->hasMany(Event::class,'Staff_id');
    }

}
