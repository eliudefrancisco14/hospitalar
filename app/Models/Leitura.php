<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Leitura extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'leituras';

    protected $guarded = ['id'];
     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function user(){

        return $this->belongsTo(User::class, 'USER_ID', 'id');
    }

}
