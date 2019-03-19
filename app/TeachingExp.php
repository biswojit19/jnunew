<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingExp extends Model
{
    protected $fillable = ['profileId', 'university', 'status', 'natureAssignment', 'from', 'to', 'designation', 'payScale','status','subTaught','natureAssignment','from', 'to','experience','profileId', 'point','university', 'designation', 'payScale', 'upload','ip'];
    
    
}
