<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairedItem extends Model
{
  protected $table = 'repaired_items';
  protected $fillable = ['product_id', 'serial_number'];
  protected $guarded = ['id'];

  // Relationships
  public function workOrder(){
    return $this->hasMany('\App\WorkOrder');
  }

  public function product(){
    return $this->belongsTo('\App\Product');
  }
  // End Relationships
}
