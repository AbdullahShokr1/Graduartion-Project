<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
    ];

    /////relation with DB
    ################Start Relations################
    public function admin()
    {
        return $this->belongsTo(Admin::class,'writer_id');
    }
    public function post(){
        return $this->hasMany('App\Models\Post','category_id');
    }
    #################End Relations#################
}
