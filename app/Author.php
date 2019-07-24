<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable=['authorName', 'authorEdu','authorAward', 'authorAge', 'authorImage', 'authorEmail', 'authorStatus']; 
    protected $primaryKey = 'authorId';
}
