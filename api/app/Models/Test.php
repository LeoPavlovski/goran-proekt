<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table = 'test_run';

    protected $fillable = [
        'exercise_id',
        'input',
        'output'
    ];

    public function exercises()
    {
        return $this->belongsTo(Exercise::class);
    }
}
