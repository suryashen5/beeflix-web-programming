<?php

use App\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'genre_id' => '1',
                'title' => 'The Witcher',
                'description' => 'Geralt of Rivia, a solitary monster hunter, struggles to find his place in a world where people often prove more wicked than beasts.',
                'rating' => '4.8',
                'photo' => 'the-witcher.jpg'
            ],
            [
                'genre_id' => '3',
                'title' => 'The Simpsons',
                'description' => 'The satiric adventures of a working-class family in the misfit city of Springfield.',
                'rating' => '4.9',
                'photo' => 'the-simpsons.jpg'
            ],
            [
                'genre_id' => '1',
                'title' => 'La Casa de Papel',
                'description' => 'An unusual group of robbers attempt to carry out the most perfect robbery in Spanish history - stealing 2.4 billion euros from the Royal Mint of Spain.',
                'rating' => '5',
                'photo' => 'la-casa-de-papel.jpg'
            ],
            [
                'genre_id' => '3',
                'title' => 'SpongeBob SquarePants',
                'description' => 'The misadventures of a talking sea sponge who works at a fast food restaurant, attends a boating school, and lives in an underwater pineapple.',
                'rating' => '4.0',
                'photo' => 'spongebob.jpg'
            ],
            [
                'genre_id' => '1',
                'title' => 'Breaking Bad',
                'description' => 'A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family\'s future.',
                'rating' => '4.1',
                'photo' => 'breaking-bad.jpg'
            ],
            [
                'genre_id' => '1',
                'title' => 'Vagabond',
                'description' => 'When his nephew dies in a plane crash, stunt man Cha Dal-geon resolves to find out what happened, with the help of covert operative Go Hae-ri.',
                'rating' => '4.0',
                'photo' => 'vagabond.jpg'
            ],
            [
                'genre_id' => '1',
                'title' => 'Hwarang',
                'description' => 'An elite group of young warriors trained in morals and martial arts finds love and friendship in Silla during Korea’s ancient Three Kingdoms period.',
                'rating' => '3.9',
                'photo' => 'hwarang.jpg'
            ],
            [
                'genre_id' => '2',
                'title' => 'Top Gear',
                'description' => 'The hosts talk about everything car-related. From new cars to how they\'re fueled, this show has it all.',
                'rating' => '4.6',
                'photo' => 'top-gear.jpg'
            ],
            [
                'genre_id' => '2',
                'title' => 'The Grand Tour',
                'description' => 'Follow Jeremy, Richard, and James, as they embark on an adventure across the globe, driving new and exciting automobiles from manufacturers all over the world.',
                'rating' => '4.9',
                'photo' => 'grand-tour.jpg'
            ],
            [
                'genre_id' => '2',
                'title' => 'Hell\'s Kitchen',
                'description' => 'World renowned chef Gordon Ramsay puts aspiring young chefs through rigorous cooking challenges and dinner services at his restaurant in Hollywood, "Hell\'s Kitchen".',
                'rating' => '4.5',
                'photo' => 'hells-kitchen.jpg'
            ],
            [
                'genre_id' => '1',
                'title' => 'Daredevil',
                'description' => 'Blinded as a young boy, Matt Murdock fights injustice by day as a lawyer and by night as the Super Hero Daredevil in Hell\'s Kitchen, New York City.',
                'rating' => '4.5',
                'photo' => 'daredevil.jpg'
            ],
            [
                'genre_id' => '3',
                'title' => 'The Penguins of Madagascar',
                'description' => 'The daily adventures of penguins living in New York\'s Central Park Zoo.',
                'rating' => '4.2',
                'photo' => 'penguins-of-madagascar.jpg'
            ]
        ];

        foreach ($items as $item) {
            Movie::create($item);
        }
    }
}
