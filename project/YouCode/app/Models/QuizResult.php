<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidat_id',
        'score',
    ];

    public function candidat(){
        $this->belongsTo(User::class);
    }
}
