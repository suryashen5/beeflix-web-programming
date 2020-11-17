<?php

use App\Episode;
use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
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
                'movie_id' => '1',
                'episode' => '1',
                'title' => 'The End\'s Beginning'
            ],
            [
                'movie_id' => '1',
                'episode' => '2',
                'title' => 'Four Marks'
            ],
            [
                'movie_id' => '1',
                'episode' => '3',
                'title' => 'Betrayer Moon'
            ],
            [
                'movie_id' => '1',
                'episode' => '4',
                'title' => 'Of Banquets, Bastards and Burials'
            ],
            [
                'movie_id' => '1',
                'episode' => '5',
                'title' => 'Bottled Appetites'
            ],
            [
                'movie_id' => '2',
                'episode' => '1',
                'title' => 'The Serfsons'
            ], [
                'movie_id' => '2',
                'episode' => '2',
                'title' => 'Springfield Splendor'
            ], [
                'movie_id' => '2',
                'episode' => '3',
                'title' => 'Whistler\'s Father'
            ], [
                'movie_id' => '2',
                'episode' => '4',
                'title' => 'Treehouse of Horror XXVIII'
            ], [
                'movie_id' => '2',
                'episode' => '5',
                'title' => 'Gone Boy'
            ],
            [
                'movie_id' => '3',
                'episode' => '1',
                'title' => 'Do as Planned'
            ],
            [
                'movie_id' => '3',
                'episode' => '2',
                'title' => 'Lethal Negligence'
            ],
            [
                'movie_id' => '3',
                'episode' => '3',
                'title' => 'Misfire'
            ],
            [
                'movie_id' => '3',
                'episode' => '4',
                'title' => 'Trojan Horse'
            ],
            [
                'movie_id' => '3',
                'episode' => '5',
                'title' => 'Groundhog Day'
            ],
            [
                'movie_id' => '4',
                'episode' => '1',
                'title' => 'FarmerBob'
            ],
            [
                'movie_id' => '4',
                'episode' => '2',
                'title' => 'Gary & Spot'
            ],
            [
                'movie_id' => '4',
                'episode' => '3',
                'title' => 'The Nitwitting'
            ],
            [
                'movie_id' => '4',
                'episode' => '4',
                'title' => 'The Krusty Slammer'
            ],
            [
                'movie_id' => '4',
                'episode' => '5',
                'title' => 'Pineapple RV'
            ],
            [
                'movie_id' => '5',
                'episode' => '1',
                'title' => 'Live Free or Die'
            ],
            [
                'movie_id' => '5',
                'episode' => '2',
                'title' => 'Madrigal'
            ],
            [
                'movie_id' => '5',
                'episode' => '3',
                'title' => 'Hazard Pay'
            ],
            [
                'movie_id' => '5',
                'episode' => '4',
                'title' => 'Fifty-One'
            ],
            [
                'movie_id' => '5',
                'episode' => '5',
                'title' => 'Dead Freight'
            ],
            [
                'movie_id' => '6',
                'episode' => '1',
                'title' => 'Episode 1'
            ],
            [
                'movie_id' => '6',
                'episode' => '2',
                'title' => 'Episode 2'
            ],
            [
                'movie_id' => '6',
                'episode' => '3',
                'title' => 'Episode 3'
            ],
            [
                'movie_id' => '6',
                'episode' => '4',
                'title' => 'Episode 4'
            ],
            [
                'movie_id' => '6',
                'episode' => '5',
                'title' => 'Episode 5'
            ],
            [
                'movie_id' => '7',
                'episode' => '1',
                'title' => 'Episode 1'
            ],
            [
                'movie_id' => '7',
                'episode' => '2',
                'title' => 'Episode 2'
            ],
            [
                'movie_id' => '7',
                'episode' => '3',
                'title' => 'Episode 3'
            ],
            [
                'movie_id' => '7',
                'episode' => '4',
                'title' => 'Episode 4'
            ],
            [
                'movie_id' => '7',
                'episode' => '5',
                'title' => 'Episode 5'
            ],
            [
                'movie_id' => '8',
                'episode' => '1',
                'title' => 'Burma Special'
            ],
            [
                'movie_id' => '8',
                'episode' => '2',
                'title' => 'Pantagonia Special'
            ],
            [
                'movie_id' => '8',
                'episode' => '3',
                'title' => 'Hot Hatchbacks'
            ],
            [
                'movie_id' => '8',
                'episode' => '4',
                'title' => 'Africa Special: Part 1'
            ],
            [
                'movie_id' => '8',
                'episode' => '5',
                'title' => 'Africa Special: Part 2'
            ],
            [
                'movie_id' => '9',
                'episode' => '1',
                'title' => 'The Holy Trinity'
            ],
            [
                'movie_id' => '9',
                'episode' => '2',
                'title' => 'Operation Desert Stumble'
            ],
            [
                'movie_id' => '9',
                'episode' => '3',
                'title' => 'Opera, Arts and Donuts'
            ],
            [
                'movie_id' => '9',
                'episode' => '4',
                'title' => 'Enviro-mental'
            ],
            [
                'movie_id' => '9',
                'episode' => '5',
                'title' => 'Moroccan Roll'
            ],
            [
                'movie_id' => '10',
                'episode' => '1',
                'title' => 'When The Wall Comes Tumbling Down'
            ],
            [
                'movie_id' => '10',
                'episode' => '2',
                'title' => 'The Yolks on Them'
            ],
            [
                'movie_id' => '10',
                'episode' => '3',
                'title' => 'An Episode of Firsts'
            ],
            [
                'movie_id' => '10',
                'episode' => '4',
                'title' => 'Hot Potato'
            ],
            [
                'movie_id' => '10',
                'episode' => '5',
                'title' => 'Last Chef Standing'
            ],
            [
                'movie_id' => '11',
                'episode' => '1',
                'title' => 'Into the Ring'
            ],
            [
                'movie_id' => '11',
                'episode' => '2',
                'title' => 'Condemned'
            ],
            [
                'movie_id' => '11',
                'episode' => '3',
                'title' => 'In the Blood'
            ],
            [
                'movie_id' => '11',
                'episode' => '4',
                'title' => 'Shadows in the Glass'
            ],
            [
                'movie_id' => '11',
                'episode' => '5',
                'title' => 'The Ones We Leave Behind'
            ],
            [
                'movie_id' => '12',
                'episode' => '1',
                'title' => 'Gone in a Flash'
            ],
            [
                'movie_id' => '12',
                'episode' => '2',
                'title' => 'Operation: Plush & Cover'
            ],
            [
                'movie_id' => '12',
                'episode' => '3',
                'title' => 'Popcorn Panic'
            ],
            [
                'movie_id' => '12',
                'episode' => '4',
                'title' => 'Eclipsed'
            ],
            [
                'movie_id' => '12',
                'episode' => '5',
                'title' => 'Misfortune Cookie'
            ]
        ];

        foreach ($items as $item) {
            Episode::create($item);
        }
    }
}
