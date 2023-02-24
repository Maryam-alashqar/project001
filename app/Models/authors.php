<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class authors extends Model
{
    use HasFactory,  SoftDeletes;
    
  
    public function authors()
    {
        return $this->hasMany(articales::class);
    }

    public function user()
    {
       return $this->morphOne(User::class ,'author_id','id');
    }
}
