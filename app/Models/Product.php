<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'describe',
        'price',
        'photo',
        'writer_id',
    ];

    /////relation with DB
    public function admin()
    {
        return $this->belongsTo(Admin::class,'writer_id');
    }
}
