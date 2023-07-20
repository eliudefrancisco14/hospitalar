<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regulation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'regulations';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
