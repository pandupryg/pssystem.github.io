<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phone';

    public $primaryKey = 'id';
    
    public function Brand(){
        return $this->belongsTo('App\Brand', 'brand_id');
    }

    protected $fillable = ['type_name', 'brand_id', 'photo'];
}
