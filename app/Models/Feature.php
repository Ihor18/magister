<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = ['name','slug'];


    public function properties()
    {
        return $this->belongsToMany(Property::class)->withTimestamps();
    }
}
