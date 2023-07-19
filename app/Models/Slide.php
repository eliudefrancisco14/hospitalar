<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Slide extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'slides';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
