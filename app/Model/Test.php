<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    
    // One to Many Relationship
    public function questions()
    {
        return $this->hasMany("App\Model\Question","test_id");
    }

    // // One to One Relationship
    // public function results()
    // {
    //     return $this->hasOne("App\Model\Result","test_id");
    // }

     // Many to Many Relationship
     public function users()
     {
         return $this->belongsToMany("App\Model\User")->withPivot('score');
     }
    

}
