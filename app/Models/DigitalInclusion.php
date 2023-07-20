<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DigitalInclusion extends Model
{

    use HasFactory, SoftDeletes;
    protected $table = 'digital_inclusions';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function images()
    {
        return $this->hasMany(ImageDigitalInclusion::class, 'fk_idDigital_inclusion');
    }
}
