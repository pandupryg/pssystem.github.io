<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    public $primaryKey = 'id';
    
    public function Phone(){
        return $this->hasMany('App\Phone');
    }

    protected $fillable = ['brand_name', 'photo'];
}
