<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = [
        'episode', 'title'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
