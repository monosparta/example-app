<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

     public function trails()
    {
        return $this->belongsToMany('App\Models\Trail', 'collection_trail');
    }
    // 之後補model設定
}
