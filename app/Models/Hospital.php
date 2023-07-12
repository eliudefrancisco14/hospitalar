<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hospital extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'hospital';
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    
    public function images(){

        return $this->hasMany(ImageHospital::class, 'fk_idHospital');
    }
}
