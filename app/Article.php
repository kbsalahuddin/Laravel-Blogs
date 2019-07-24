<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=['categoryId','authorId','articleName', 'articleSubHead','articleBody', 'articleImage','articleStatus']; 
    protected $primaryKey = 'articleId';
}
