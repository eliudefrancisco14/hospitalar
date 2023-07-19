<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Faq extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'faqs';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
