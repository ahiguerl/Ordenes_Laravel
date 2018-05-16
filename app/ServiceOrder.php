<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
  protected $table = 'service_orders';
  protected $fillable = ['client_id'];
  protected $guarded = ['id', 'user_id', 'date', 'is_open'];

  // Relationships
  public function workOrder(){
    return $this->hasMany('\App\WorkOrder');
  }

  public function client(){
    return $this->belongsTo('\App\Client');
  }

  public function user(){
    return $this->belongsTo('\App\User');
  }
  // end Relationships


}
