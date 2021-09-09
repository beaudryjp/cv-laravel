<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $table = 'works';

    protected $fillable = ['cv_id', 'position', 'company', 'date_start', 'date_finish', 'description'];
}
