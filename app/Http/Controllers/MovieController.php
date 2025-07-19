<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Episode;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id) {
        $movie = Movie::find($id);
        $episodes = Episode::where('movie_id', '=', $id)
            ->orderBy('episode')
            ->paginate(3);

        return view('movie', [
            'headtitle' => $movie->title,
            'data' => $movie,
            'episodes' => $episodes,
        ]);
    }
}
