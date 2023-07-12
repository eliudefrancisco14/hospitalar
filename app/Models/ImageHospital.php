<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImageHospital extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;

    protected $table = 'image_gallery_hotel';
    protected $guarded = ['id']; 
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
