<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'mycontent',
        'category_id',
        'writer_id',
        'slug',
        'photo',
    ];
    ################Start Relations################
    public function admin()
    {
        return $this->belongsTo('App\Models\Admin','writer_id');
    }
    public function category(){
        return $this-> belongsTo('App\Models\Category','category_id');
    }
    #################End Relations#################
}
