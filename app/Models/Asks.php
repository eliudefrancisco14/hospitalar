<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Asks extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'asks';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
