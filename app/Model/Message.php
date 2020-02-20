<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // One to Many Relationship
    public function users()
    {
        return $this->hasMany("App\User","user_id");
    }
}
