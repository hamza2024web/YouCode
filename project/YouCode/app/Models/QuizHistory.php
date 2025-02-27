<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'response_id',
        'candidat_id',
    ];

    public function responses(){
        return $this->belongsTo(Response::class);
    }
    public function candidat(){
        return $this->belongsTo(User::class);
    }
}
