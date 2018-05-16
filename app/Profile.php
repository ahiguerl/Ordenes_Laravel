<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $guarded = ['id', 'name'];

    // Relationships
    public function user(){
      return $this->hasMany('\App\User'); // The seconf param is the pivot table
    }
    // End Relationships

}
