<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['categoryName', 'categoryStatus']; 
    protected $primaryKey = 'categoryId';
}
