<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'banner',
        'banner_description',
        'banner_photo',
        'banner1',
        'banner1_description',
        'banner1_photo',
        'social1',
        'social2',
        'social3',
        'social4',
    ];
}
