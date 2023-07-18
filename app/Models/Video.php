<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Video extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'videos';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
