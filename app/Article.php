<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'article';

    public $primaryKey = 'id';

    protected $fillable = ['title_article','description_article','small_desc_article', 'photo'];
}
