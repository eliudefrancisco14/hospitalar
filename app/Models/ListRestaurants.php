<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListRestaurants extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $table = 'list_restaurants';
    protected $guarded = ['id'];



    protected $dates = ['deleted_at'];


    public function images(){

        return $this->hasMany(ImageRestaurant::class, 'fk_idRestaurants');
    }
}
