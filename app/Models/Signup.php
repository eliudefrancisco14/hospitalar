<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Signup extends Model
{ 
    use HasFactory,SoftDeletes;

    protected $table = 'signups';
    protected $guarded = ['id'];
   
   
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function events(){
        
        return $this->hasMany(Event::class, 'signup_id', 'id');
    }


}