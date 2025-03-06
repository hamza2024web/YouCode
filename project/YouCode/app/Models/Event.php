<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'date_start',
        'date_end',
        'description',
        'staff_id',
    ];

    public function User (){
        return $this->belongsTo(User::class);
    }
}
