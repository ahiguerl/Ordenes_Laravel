<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $table = 'supplies';
    protected $fillable = ['detail', 'unit_of_measurement'];
    protected $guarded = ['id'];

    // Relationship
    public function repairProcess(){
        return $this->belongsToMany('\App\RepairProcess','required_supplies')->withPivot('quantity');
    }

    public function product(){
        return $this->belongsToMany('\App\Product','required_supplies')->withPivot('quantity');
    }
    // End Relationship
}
