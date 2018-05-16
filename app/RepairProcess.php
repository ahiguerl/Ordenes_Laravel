<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairProcess extends Model
{
    protected $table = 'repair_processes';
    protected $fillable =['name'];
    protected $guarded = ['id'];

    // Relationships many to many
    public function workOrders(){
      return $this->belongsToMany('\App\WorkOrder','repair_process_work_order'); // The seconf param is the pivot table
    }

    public function product(){
        return $this->belongsToMany('\App\Product','required_supplies')->withPivot('quantity');
    }

    public function supply(){
        return $this->belongsToMany('\App\Supply','required_supplies')->withPivot('quantity');
    }
    // End Relationships

}
