<?php

class KidsSeeder extends BaseMovieSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre_id = $this->insertGenre('Kids');

        $this->insertMovieAndEpisodes([
            'title' => 'Tonari no Totoro',
            'photo' => '75923.jpg',
            'description' => 'n 1950s Japan, Tatsuo Kusakabe relocates himself and his two daughters, Satsuki and Mei, to the countryside to be closer to their mother, who is hospitalized due to long-term illness. As the girls grow acquainted with rural life, Mei encounters a small, bunny-like creature in the yard one day. Chasing it into the forest, she finds "Totoro"—a giant, mystical forest spirit whom she soon befriends. Before long, Satsuki too meets Totoro, and the two girls suddenly find their lives filled with magical adventures in nature and fantastical creatures of the woods. [Written by MAL Rewrite]',
            'rating' => 8.34,
            'genre_id' => $genre_id,
            'episodes' => 1,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Stand By Me Doraemon',
            'photo' => '65571.jpg',
            'description' => 'Nobita Nobi is an elementary student who hates studying, is bad at sports, and does everything half-heartedly. He is a pushover, unlucky, and fearful of many things. His personality makes him a failure in life, even affecting his progeny. This causes his great-great-grandchild, Sewashi, to take control of the situation. Sewashi travels back in time from the 22nd century to the 20th century to meet Nobita, who is shocked to see him appear out of his drawer alongside a blue robotic cat. The robotic cat calls himself Doraemon, who claims to have been pressured by Sewashi to assist Nobita, with their ultimate goal being to provide Nobita happiness. Frustrated after seeing Nobita\'s hopeless state, Doraemon decides to go back to the future. However, Sewashi activates a program within Doraemon that prevents him from doing so. Forced to stay, Doraemon helps Nobita using futuristic gadgets through his four-dimensional pocket—a bag containing anything inside it. Can Doraemon bring Nobita happiness and return to the future? [Written by MAL Rewrite]',
            'rating' => 8.05,
            'genre_id' => $genre_id,
            'episodes' => 1,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Chocolate Underground',
            'photo' => '12400.jpg',
            'description' => 'Chocolate and other sweets have been banned thanks to the political reign of the Good For You Party, and the new laws are enforced strictly, with force if need be. Smudger and Huntley are two teen boys determined to eat chocolate again. They search out rumored chocolate bootleggers, eventually starting their own chocolate underground distribution.',
            'rating' => 6.16,
            'genre_id' => $genre_id,
            'episodes' => 13,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Rilakkuma to Kaoru-san',
            'photo' => '100702.jpg',
            'description' => 'Her life might be a little mundane, but Kaoru gets to go home to Rilakkuma, her endearingly lazy roommate who happens to be a fuzzy toy bear.',
            'rating' => 7.63,
            'genre_id' => $genre_id,
            'episodes' => 13,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Ojamajo Doremi Sharp Movie',
            'photo' => '40405.jpg',
            'description' => 'One day Pop was out scavenging with Hana, and found a beautiful rose inside the Queen\'s garden. Curious, she picked the rose and brought it home. Unwittingly, that rose can cause all wishes to become true, whether good or bad. Good wishes will turn the rose white and bloom, while bad wishes will turn the rose black and wither. After a heated argument with her sister Doremi, Pop wishes that Doremi loses all her magic and be turned into a mouse. Hilarity ensues, as Doremi and the others try to put everything back to normal.',
            'rating' => 7.11,
            'genre_id' => $genre_id,
            'episodes' => 1,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Motto! Ojamajo Doremi: Kaeru Ishi no Himitsu',
            'photo' => '27121.jpg',
            'description' => 'Mo~tto Ojamajo Doremi movie features the five witches Doremi, Aiko, Hazuki, Onpu, and Momoko as they visit Doremi\'s grandpa\'s home. There, they learn of the mystery of the frog stone, a magical place where magic used to mingle in the old countryside. Aiko rediscovers her love for grandpa, and Doremi learns a piece of the magical kingdom\'s past.',
            'rating' => 7.14,
            'genre_id' => $genre_id,
            'episodes' => 1,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Doraemon Movie 31: Shin Nobita to Tetsujin Heidan - Habatake Tenshi-tachi',
            'photo' => '72436.jpg',
            'description' => 'Jealous of Suneo\'s new robot toy, Nobita asks Doraemon to build him an even better one. Doraemon initially refuses, until Nobita accidentally discovers pieces of a mysterious robot that falls from the sky. After gathering all the robot parts and assembled them together, the giant robot, Zanda Claus, is soon completed. The duo soon learn that the robot is not a mere toy, but a powerful weapon in the fight against the coming Robot Army that is going to attack Earth and enslave the human inhabitants of it. An invasion is near, as a mysterious girl Riruru shows up, looking for the robot. (Source: Wikipedia)',
            'rating' => 7.87,
            'genre_id' => $genre_id,
            'episodes' => 1,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Pokemon Generations',
            'photo' => '83210.jpg',
            'description' => 'Pokémon Generations revisits each generation of the Pokémon video game series to shed new light on some timeless moments. From the earliest days in the Kanto region to the splendor of the Kalos region, go behind the scenes and witness Pokémon history with new eyes! (Source: Official site)',
            'rating' => 7.47,
            'genre_id' => $genre_id,
            'episodes' => 18,
        ]);

        $this->insertMovieAndEpisodes([
            'title' => 'Pokemon (2019)',
            'photo' => '105554.jpg',
            'description' => 'On a new day in the Kanto region, Satoshi gets invited by Professor Yukinari Ookido over to Professor Sakuragi\'s lab-opening ceremony in Vermillion City. During the ceremonial speech, Professor Sakuragi receives an alert of a possibly rare Pokémon appearing in Vermillion City\'s harbor, leading Satoshi and the other trainers to rush to the area in hopes of finding the mysterious Pokémon. At the harbor, they find Lugia—a Legendary Pokémon—engaged in combat with other trainers. Noticing the other trainers\' tactics, Satoshi has his partner, Pikachu, strike Lugia with a Thunderbolt attack. Unfazed, Lugia flees, but not before Satoshi determinedly leaps onto its back. To Satoshi\'s surprise, he meets another boy, Gou, who leapt onto Lugia\'s back as well. The two ride on Lugia\'s back as it brings them along on a bizarre adventure across the seas. As it lets the two back on the ground, Satoshi and Gou bid their farewells to Lugia and return to Sakuragi Institute. Impressed by Gou\'s findings and Satoshi\'s insight taken during their encounter, Sakuragi requests for the duo to be his new research partners. And so the duo\'s journey begins, traveling across multiple regions to meet many new Pokémon—including ones that have the ability to Gigantamax! [Written by MAL Rewrite]',
            'rating' => 7.34,
            'genre_id' => $genre_id,
            'episodes' => 16,
        ]);
    }
}
