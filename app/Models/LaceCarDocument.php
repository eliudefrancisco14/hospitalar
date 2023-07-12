<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LaceCarDocument extends Model
{
    use HasFactory;
    use HasFactory,SoftDeletes;

    protected $table = 'lace_car_documents';
    protected $guarded = ['id'];
  
    protected $dates = ['deleted_at'];
}
