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
        'user_id',
        'product_id',
    ];

    ################Start Relations################
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function cart(){
        return $this-> belongsTo('App\Models\Cart','shopping_id');
    }
    public function payment(){
        return $this->hasOne('App\Models\Payment','order_id');
    }
    public function sales(){
        return $this->hasOne('App\Models\Sales','order_id');
    }
    public function product(){
        return $this->belongsTo('App\Models\Product','product_id');
    }
    #################End Relations#################
}
