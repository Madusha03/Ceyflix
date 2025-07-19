<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'genre_id', 'title', 'photo', 'description', 'rating',
    ];

    public function genre() {
        return $this->belongsTo('App\Genre');
    }

    public function episodes() {
        return $this->hasMany('App\Episode', 'movie_id', 'id');
    }
}
