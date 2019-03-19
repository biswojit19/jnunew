<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchPublication extends Model
{
    protected $fillable = ['title', 'issnNo', 'publisher', 'type',  'author', 'year','level','type', 'refereed', 'author', 'year', 'points', 'no_del','sp_points','upload','ip'];
    
    
}
