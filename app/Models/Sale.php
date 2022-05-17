<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
        'order_id',
        'admin_id',
    ];

    ################Start Relations################
    public function order(){
        return $this-> belongsTo('App\Models\Order','order_id');
    }
    #################End Relations#################
}
