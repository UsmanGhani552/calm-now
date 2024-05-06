<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','image', 'description', 'time', 'instructions', 'exercise_id', 'sound_type_id',
    ];

    protected $casts = [
        'instructions' => 'array',
    ];
}
