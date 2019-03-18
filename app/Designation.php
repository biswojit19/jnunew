<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = ['name', 'code','status'];

     public function profiledetails()
    {
        return $this->belongsTo(ProfileDetails::class);
    }
}
