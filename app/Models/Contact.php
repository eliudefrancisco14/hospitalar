<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Contact extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'contacts';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];
}
