<?php

use Illuminate\Database\Seeder;

abstract class BaseMovieSeeder extends Seeder {
    protected function insertGenre($value) {
        return DB::table('genres')->insertGetId([ 'name' => $value ]);
    }

    protected function insertMovieAndEpisodes($value) {
        $movie_id = DB::table('movies')->insertGetId([
            'title' => $value['title'],
            'photo' => $value['photo'],
            'description' => $value['description'],
            'rating' => round($value['rating']),
            'genre_id' => $value['genre_id'],
        ]);

        for ($ep = 1; $ep <= $value['episodes']; $ep++) {
            DB::table('episodes')->insert([
                'episode' => $ep,
                'title' => $value['title'].' Episode '.$ep,

                'movie_id' => $movie_id,
            ]);
        }

        return $movie_id;
    }
}
