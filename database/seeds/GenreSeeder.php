<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Drama'],
            ['name' => 'TV Show'],
            ['name' => 'Kids']
        ];

        foreach ($items as $item) {
            Genre::create($item);
        }
    }
}
