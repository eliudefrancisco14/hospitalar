<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory , SoftDeletes;
    
    protected $table = 'events';
    protected $guarded = ['id']; 
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function typeevent(){
        return $this->belongsTo(TypeEvent::class, 'type_event_id');
    }
    
    public function signup(){

        return $this->belongsTo(Signup::class, 'signup_id');
    }

}