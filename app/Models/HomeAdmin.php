<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
'name','bg_img','profile_img'
    ];
}
