<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';

    protected $fillable = ['cv_id', 'course', 'location', 'date_start', 'date_finish', 'description', 'grade'];
}
