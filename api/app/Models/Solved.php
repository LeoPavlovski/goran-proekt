<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solved extends Model
{
    use HasFactory;

    protected $table = 'solved';

    protected $fillable = [
        'user_id',
        'exercise_id',
        'result'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function exercises()
    {
        return $this->belongsTo(Exercise::class, 'exercise_id');
    }
}
