<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageDigitalInclusion extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'image_digital_inclusions';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
