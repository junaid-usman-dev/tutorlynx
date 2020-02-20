<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email_address', 'password', 'image_id', 'summary', 'teaching_method', 'price_per_hour'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // One to One Relationship
    public function images()
    {
        return $this->hasOne("App\Image");
    }

    // One to One Relationship
    public function payments()
    {
        return $this->hasOne("App\Payment");
    }

    // One to Many Relationship
    // public function subjects()
    // {
    //     return $this->hasMany("App\Model\Subject");
    // }

    // One to Many Relationship
    public function favorites()
    {
        return $this->hasMany("App\Model\Favorite","user_id");
    }

    // Many to Many Relationship
    public function subjects()
    {
        return $this->belongsToMany('App\Model\Subject');
    }

    // Many to Many Relationship
    public function tests()
    {
        return $this->belongsToMany('App\Model\Test')->withPivot(['score']);
    }

    // One to Many Relationship
    public function messages()
    {
        return $this->hasMany("App\Model\Message","sender_id");
    }

}
