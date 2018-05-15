<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    protected $table = 'order_statuses';
    protected $fillable = ['name'];
    protected $guarded = ['id'];

    //Relationships
    public function workOrder(){
      return $this->hasMany('\App\WorkOrder');
    }
    //End Relationships
}
