<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'total_cost',
        'user_id',
        'product_id',
    ];

    ################Start Relations################
    public function User(){
        return $this-> belongsTo('App\Models\User','user_id');
    }
    public function order(){
        return $this->hasOne('App\Models\Order','shopping_id');
    }
    public function producut(){
        return $this-> belongsTo('App\Models\Product','product_id');
    }
    #################End Relations#################
}
