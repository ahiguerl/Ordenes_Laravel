<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
  protected $table = 'work_orders';
  protected $fillable = ['order_status_id', 'description', 'remark'];
  protected $guarded = ['id', 'service_order_id', 'repaired_item_id'];

  // Relationships
  public function repairedItem(){
    return $this->belongsTo('\App\RepairedItem');
  }
  
  public function repairProcesses(){
    return $this->belongsToMany('\App\RepairProcess','repair_process_work_order');
  }

  public function serviceOrder(){
    return $this->belongsTo('\App\ServiceOrder');
  }

  public function orderStatus(){
    return $this->belongsTo('\App\OrderStatus');
  }


  // end Relationships
}
