<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneDetail extends Model
{
    //
    protected $table = 'phone_detail';

    public $primaryKey = 'id';
    
    public function Phone(){
        return $this->belongsTo('App\Phone', 'phone_id');
    }

    protected $fillable = ['phone_id','color', 'memory', 'storage', 'stock', 'price'];
}
