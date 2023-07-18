<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Partner extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'partners';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
