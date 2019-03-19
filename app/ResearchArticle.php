<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchArticle extends Model
{
    protected $fillable = ['profileId', 'userId', 'refereed', 'author', 'year', 'pubType', 'title', 'journalNo', 'issnIsbnNo','refereed', 'author', 'year', 'userId', 'no_del','points', 'userId','sp_points', 'upload','ip'];
    
    
}
