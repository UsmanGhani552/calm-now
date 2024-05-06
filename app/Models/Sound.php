<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','image', 'description', 'time', 'instructions', 'exercise_id', 'sound_type_id','duration'
    ];

    protected $casts = [
        // 'instructions' => 'array',
        'duration' => 'array',
    ];

    public function exercise(){
        return $this->belongsTo(Exercise::class,'exercise_id','id');
    }

    public function soundType(){
        return $this->belongsTo(SoundType::class,'sound_type_id','id');
    }

    public function instructions()
    {
        return $this->hasMany(SoundInstruction::class);
    }
}
