<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'shopping_id',
    ];

    ################Start Relations################
    public function cart(){
        return $this-> belongsTo('App\Models\Cart','shopping_id');
    }
    public function payment(){
        return $this->hasOne('App\Models\Payment','order_id');
    }
    public function sales(){
        return $this->hasOne('App\Models\Sales','order_id');
    }
    #################End Relations#################
}
