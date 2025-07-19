<?php

class TVShowSeeder extends BaseMovieSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre_id = $this->insertGenre('TV Show');

        $this->insertMovieAndEpisodes([
            'title' => 'EXO\'s Showtime',
            'photo' => 'Yo63Wc.jpg',
            'description' => 'EXO\'s Showtime is a South Korean documentary starring the boy group EXO. It is the first season of the South Korean reality show series, Showtime.',
            'rating' => 9.0,
            'genre_id' => $genre_id,
            'episodes' => 12,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Busted',
            'photo' => '247x2c.jpg',
            'description' => 'Tackling different mysteries in each episode of this game show, seven sleuths get closer to solving the biggest one of all: What happened to Project D? Seven celebrity sleuths discover that they are a part of an operation called Project D, in which they are implanted with a chip containing the DNA of famous detectives throughout history. Led by a man only known as "K" (Ahn Nae-sang), they are recruited as private detectives and are given a new case in each episode, all the while figuring out the mystery behind Project D and its inception.',
            'rating' => 8.6,
            'genre_id' => $genre_id,
            'episodes' => 10,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Hyori\'s Bed And Breakfast',
            'photo' => 'zNmbdc.jpg',
            'description' => 'The famous diva, Lee Hyo Ri, has been taking a long hiatus from the spotlight and enjoying her life in the suburbs of Jeju Island with her husband. The couple has decided to open up their home as a Bed and Breakfast to various people to offer them a time of healing and rest from their busy lives.',
            'rating' => 9.2,
            'genre_id' => $genre_id,
            'episodes' => 14,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Produce 101: Season 2',
            'photo' => 'b2rkVc.jpg',
            'description' => 'Produce 101 Season 2 brings together 101 trainees from different entertainment companies in South Korea, and 11 trainees are selected through audience voting to form a boy band. The group will perform for 2 years together under YMC Entertainment (also the label of I.O.I from Produce 101). The top 35 also performed with the winning team at a finale concert. The winning group will disband after their contracts end, allowing the members of the final lineup to return to their agencies.',
            'rating' => 8.5,
            'genre_id' => $genre_id,
            'episodes' => 11,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Hana yori Dango 2 (Returns) Bangai hen: Makinoke Hajimete no Kazoku Ryoko in N.Y.',
            'photo' => 'qkJ3Qc.jpg',
            'description' => 'This is a travel variety show with Hana Yori Dango cast members, the program introduces things to do and places to visit in New York, with silly challenges and punishments sprinkled in. Story threads are also introduced as lead-in to Hana Yori Dango 2. The Makinos take New York in this special Hana Yori Dango spin-off. Worried about Tsukushi (Inoue Mao) going to New York by herself to look for Tsukasa (Matsumoto Jun), the Makino parents also head to the Big Apple for their first family vacation. Traveling on a tight budget, the bumbling family of three eat and visit the best of New York spending as little money as possible and creating some funny adventures along the way.',
            'rating' => 7.9,
            'genre_id' => $genre_id,
            'episodes' => 1,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Run BTS! Season 1',
            'photo' => 'KDLejc.jpg',
            'description' => 'Run BTS! is a South Korean show by the boy band BTS. The show is all about BTS doing activities, challenges and lots more.',
            'rating' => 9.4,
            'genre_id' => $genre_id,
            'episodes' => 10,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Busted 2',
            'photo' => 'BxAJzc.jpg',
            'description' => 'Amateur detectives attempt to untangle a string of mystifying cases, which may be connected to an enigmatic figure known as the Flower Killer. (Source: Netflix)',
            'rating' => 8.8,
            'genre_id' => $genre_id,
            'episodes' => 10,
        ]);
    }
}
