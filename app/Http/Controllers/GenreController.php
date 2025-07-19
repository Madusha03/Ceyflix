<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        return view('home', [
            'data' => Genre::all(),
        ]);
    }

    public function show($id) {
        $genre = Genre::find($id);

        return view('genre', [
            'headtitle' => $genre->name,
            'data' => $genre,
        ]);
    }
}
