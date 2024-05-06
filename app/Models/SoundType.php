<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundType extends Model
{
    use HasFactory;

    protected $table  = 'sound_types';

    protected $fillale = [
        'name'
    ];
}
