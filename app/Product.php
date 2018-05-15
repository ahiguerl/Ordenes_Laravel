<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  protected $fillable = ['description', 'purchase_price', 'sale_price', 'url_image', 'tax'];
  protected $guarded = ['id'];

  // Relationships
  public function repairedItem(){
    return $this->hasMany('\App\RepairedItem');
  }
  
  // Relationship many to many
  public function repairProcess(){
      return $this->belongsToMany('\App\RepairProcess','required_supplies')->withPivot('quantity');
  }

  public function supply(){
      return $this->belongsToMany('\App\Supply','required_supplies')->withPivot('quantity');
  }
  // End Relationships
}
