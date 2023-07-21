<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class News extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'news';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
