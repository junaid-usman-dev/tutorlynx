<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    // Many to Many Relationship
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
