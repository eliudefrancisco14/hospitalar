<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\{Model,SoftDeletes};

class Province extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $table = 'provinces';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function provinces(){

        return $this->hasMany(AngolaOnline::class, 'fk_idProvince');
    }
}
