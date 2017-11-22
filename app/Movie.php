<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Movie extends Model
{
    protected $fillable = ['name','release_date','poster_image'];
    protected $dates = ['release_date'];

    function isFavourite(){
        return in_array($this->id,Auth::user()->favourites()->get()->pluck('id')->toArray());
    }
}
