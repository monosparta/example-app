<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trail extends Model
{
    use HasFactory;

     public function collections()
    {
        return $this->belongsToMany('App\Models\Collection', 'collection_trail');
    }
}
