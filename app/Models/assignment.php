<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    use HasFactory;
    protected $fillable=[
            'User_id',
            'Heading',
            'Course_id',
            'Assignment',
            'SubmisionDate',
            'SubmisionTime',
    ];
}
