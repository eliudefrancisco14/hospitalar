<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class ImageGallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'image_galleries';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
