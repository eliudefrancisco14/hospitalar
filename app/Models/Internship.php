<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Internship extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'internships';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
