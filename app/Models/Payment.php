<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'card_number',
        'cvv',
        'ex_date',
        'order_id',
    ];

    ################Start Relations################
    public function order(){
        return $this-> belongsTo('App\Models\Order','order_id');
    }
    #################End Relations#################
}
