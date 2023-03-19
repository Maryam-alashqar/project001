<?php

namespace App\Models;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class view extends Model
{
    use HasFactory;


    protected $table = 'views';

     public function postView()
    {
        return $this->belongsTo(articales::class);
    }


}
