<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_logo',
        'copyright',
        'slogan',
        'meta_description',
        'meta_keywords',
        'facebook',
        'google',
        'google_plus',
        'twiter',
        'contact',
        'email',
        'address',
        
      
    ];
}
