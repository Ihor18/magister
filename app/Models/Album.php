<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $fillable = ['name','user_id'];

    public function galleryimages()
    {
        return $this->hasMany(Gallery::class);
    }
}
