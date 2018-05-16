<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
      'email',
      'password',
      'last_name',
      'address',
      'phone',
      'date_to_entry',
      'url_avatar',
      'profile_id'
      ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Relationships
    public function serviceOrder(){
      return $this->hasMany('\App\ServiceOrder');
    }

    public function profile(){
      return $this->belongsTo('\App\Profile');
    }
    //End Relationships

}
