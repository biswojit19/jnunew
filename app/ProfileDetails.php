<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use GrahamCampbell\Markdown\Facades\Markdown;
use Laratrust\Traits\LaratrustUserTrait;

class ProfileDetails extends Authenticatable
{

    protected $fillable = ['post', 'userId','department','mobile','advt','jobId','transaction','transStatus', 'payDate','payStatus','section1','section2','section3','section4','section5','section6','section7','section9','feedback_code','check_pay','no_of_pay','elligible_status', 'formNo'];
    protected $table = 'profiledetails';

     public function departments()
    {
        
        return $this->hasOne("App\Department", "id", "department");
    } 
     public function jobposts()
    {
        
        return $this->hasOne("App\JobPost", "id", "jobId");
    } 



}
