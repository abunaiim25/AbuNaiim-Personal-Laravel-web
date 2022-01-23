<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'top_description','bottom_description','title','image',
        'birth','age','web','degree','phone','email','city','work'
            ];
}
