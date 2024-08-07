<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable=[
        'Course_name',
        'Course_code',
        'Course_teacher',
        'Year_tought',
        'Program_name',
    ];
}
