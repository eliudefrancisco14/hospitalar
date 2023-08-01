<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AngolaOnline extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'angola_onlines';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function provinces()
    {
        return $this->belongsTo(Province::class, 'fk_idProvince');
    }
}
