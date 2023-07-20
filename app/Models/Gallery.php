<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Gallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'galleries';
    protected $guarded = ['id'];
    protected $dates = ['delected_at'];

    public function images(){

        return $this->hasMany(ImageGallery::class, 'fk_idGallery');
    }
}
