<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;


class articales extends Model implements Viewable
{

    use HasFactory, SoftDeletes, InteractsWithViews ;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(categories::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function postView()
    {
        return $this->hasMany(view::class);
    }

    public function postComments()
    {
        return $this->hasMany(comment::class);
    }
}
