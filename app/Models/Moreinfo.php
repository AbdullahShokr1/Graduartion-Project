<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moreinfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address',
        'city',
        'state',
        'zip_code',
        'user_id',
    ];

    ################Start Relations################
    public function User(){
        return $this-> belongsTo('App\Models\User','user_id');
    }
    #################End Relations#################
}
