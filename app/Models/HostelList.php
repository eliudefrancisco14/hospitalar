<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HostelList extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'hotel_list';
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
    public function images(){

        return $this->hasMany(ImageHotel::class, 'fk_idHotel_list');
    }

}
