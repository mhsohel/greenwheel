<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Role extends Model
{
    use HasFactory;

//    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'slug',

    ];


    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function hasPermission ($permission)
    {
        return $this->role->persmissions()->where('slug',$permission)->first() ? true : false;
    }
}
