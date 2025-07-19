<?php

class DramaSeeder extends BaseMovieSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre_id = $this->insertGenre('Drama');

        $this->insertMovieAndEpisodes([
            'title' => 'Boku Dake ga 17-sai no Sekai de',
            'photo' => 'q8J7dc.jpg',
            'description' => 'Childhood friends Kota and Mei were third-year students in high school when Kota suddenly died.  Seven years later, Mei returns to her hometown and visits a place with mid-winter cherry blossom trees that were special to her and Kota. To her surprise, Kota, who is supposed to be dead, appears. He is still 17 in mind and body while she is now 24. Kota can only be here while the cherry blossom blooms. Will he be able to tell Mei his feelings with the time he has left? (Source: jdramas.wordpress.com)',
            'rating' => 8.1,
            'genre_id' => $genre_id,
            'episodes' => 8,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Koi wa Tsuzuku yo Doko Made mo',
            'photo' => 'Qm8r2c.jpg',
            'description' => 'Nanase Sakura is a 23-year-old rookie nurse. She met Doctor Kairi Tendo several years ago and fell in love with him. To meet him again, she studied hard and became a nurse. After 5 years, she finally meets Kairi Tendo again, but he has a totally different personality than what she imagined. Kairi Tendo, who is 31-years-old, is commonly referred to as the "Devil" at work. He is a level-headed perfectionist and often makes biting remarks to doctors and nurses. Nanase Sakura works hard to receive recognition from Kairi Tendo and she also expresses her feelings honestly to him. Due to her persistence, Nanase Sakura becomes well known at the hospital and she picks up the nickname of the "Warrior. Chick" Meanwhile, Kairi Tendo becomes attracted to Nanase Sakura. (Source: AsianWiki)',
            'rating' => 8.5,
            'genre_id' => $genre_id,
            'episodes' => 10,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Itazura na Kiss: Love in Tokyo',
            'photo' => 'n0rnWc.jpg',
            'description' => 'At a high school entrance ceremony, high school student Kotoko Aihara, who isn\'t that smart, notices pretty boy Naoki Irie. She falls in love with him immediately. Kotoko initially doesn\'t express her feelings to him, but finally has a chance to tell him how she feels. Unfortunately, Naoki turns Kotoko down, saying "I don\'t like dumb women." One day, Kotoko Aihara\'s house is severely damaged by a meteorite. Then, Kotoko Aihara and her father decide to live with her father\'s friend. When Kotoko Aihara moves to her new temporary house, she is surprised to learn that Naoki Irie lives there as well. ~~ Adapted from the manga "Itazura na Kiss" by Kaoru Tada.',
            'rating' => 8.0,
            'genre_id' => $genre_id,
            'episodes' => 16,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Hospital Playlist',
            'photo' => 'RXXL6_4c.jpg',
            'description' => 'A drama depicting the stories of people going through their days that are seemingly ordinary but actually special, at the hospital, a place known as the microcosm of life - where someone is being born and someone\'s life meets their ending. The five doctors are long time friends of 20 years who started their undergrad in 1999 in the same medical school, and now they are colleagues in the same hospital. The drama will also deal with a story of a band formed by the group of doctors. (Source: Naver, translated by YeoNiverse)',
            'rating' => 9.2,
            'genre_id' => $genre_id,
            'episodes' => 12,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'It\'s Okay to Not Be Okay',
            'photo' => 'xw3xX_4c.jpg',
            'description' => 'The story of a community health worker at a psychiatric ward who lives on 1.8 million won (approximately $1,520) a month and a storybook writer suffering from an antisocial personality disorder. A man who denies love and a woman who doesn’t know love defy fate and fall in love, finding their souls and identities in the process. Moon Gang Tae is a community health worker at a psychiatric ward who was blessed with everything including a great body, smarts, ability to sympathize with others, patience, ability to react quickly, stamina, and more. Meanwhile, Ko Moon Young is a popular writer of children’s literature, but she is extremely selfish, arrogant, and rude. (Source: Soompi & Koreandrama.org)',
            'rating' => 9.2,
            'genre_id' => $genre_id,
            'episodes' => 16,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Prison Playbook',
            'photo' => 'xXK7yc.jpg',
            'description' => 'Kim Je Hyuk, a famous baseball player, is arrested after using excessive force while chasing a man trying to sexually assault his sister. Shockingly to him and the rest of the nation, he is sentenced to a year in prison. There, he meets his childhood friend and fellow baseball player, Lee Joon Ho, who gave up on baseball after a car accident, but now is a prison guard and one of Je Hyuk\'s biggest fans. The drama revolves around Je Hyuk\'s time in prison, as well as prisoners he meets and events that take place there. (Source: MyDramaList)',
            'rating' => 9.1,
            'genre_id' => $genre_id,
            'episodes' => 16,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => '1 Litre no Namida',
            'photo' => 'QY0R2_4c.jpg',
            'description' => '15-year-old Ikeuchi Aya is an ordinary girl, the daughter of a family who works at a tofu shop, and a soon-to-be high schooler. However, odd things have been happening to Aya lately. She has been falling down often and walks strange. Her mother, Shioka, takes Aya to see the doctor, and he informs Shioka that Aya has spinocerebellar degeneration - a terrible disease where the cerebellum of the brain gradually deteriorates to the point where the victim cannot walk, speak, write, or eat.',
            'rating' => 9.0,
            'genre_id' => $genre_id,
            'episodes' => 11,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Boku no Ita Jikan',
            'photo' => 'BgOOz_4c.jpg',
            'description' => 'Sawada Takuto is an ordinary university student, who one day learns that he has A.L.S.  (Lou Gehrig’s disease) with not much time left to live. Instead of wallowing in despair, Takuto tries to live his life to the fullest.',
            'rating' => 8.6,
            'genre_id' => $genre_id,
            'episodes' => 11,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Liar Game',
            'photo' => 'l0okbc.jpg',
            'description' => 'Kanzaki Nao is an honest college student who receives a hundred million yen one day, along with a card saying she has been chosen to take part in the "Liar Game". The aim of the game is to trick the other players out of their hundred million dollars. In the end, the winner gets the hundred million, and the loser is a hundred million yen in debt. The next day, she receives notification that her opponent is her former teacher, Fujisawa Kazuo. She goes to him, seeking help, but ends up getting tricked into handing her money over. Desperate, she approaches the police for help, but they are unable to do anything. However, she is told of a mastermind swindler, Akiyama Shinichi, who is to be released from jail the next day. Desperate, she goes to him for help.',
            'rating' => 8.4,
            'genre_id' => $genre_id,
            'episodes' => 11,
        ]);
    }
}
