<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalData extends Model
{
    use HasFactory;
    protected $table = 'personal_datas';

    protected $fillable = ['cv_id', 'address', 'postal_code', 'country'];
}
