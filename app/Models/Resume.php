<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'head_des',
        'study_sub','study_date','study_place','study_des',
        'work_sub','work_date','work_des'
            ];
}
