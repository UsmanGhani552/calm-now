<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundInstruction extends Model
{
    use HasFactory;

    public function sound(){
        return $this->belongsTo(Sound::class,'sound_id','id');
    }
}
