<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'photo', 'description', 'rating'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function episode()
    {
        return $this->hasMany('App\Episode');
    }
}
