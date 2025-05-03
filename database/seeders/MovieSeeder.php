<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('movies')->delete();
        \DB::table('movies')->insert([
            [
                'title' => 'Frozen',
                'year' => '2013',
                'rated' => 'PG',
                'duration' => '1hr 42min',
                'picture' => 'frozen.jpg',
                'description' => "Fearless optimist Anna teams up with rugged mountain man Kristoff and his loyal reindeer Sven in an epic journey to find Anna's sister Elsa, whose icy powers have trapped the kingdom of Arendelle in eternal winter.",
                'main_cast' => 'Kristen Bell | Idina Menzel | Jonathan Groff',
                'director' => 'Chris Buck | Jeniffer Lee',
                'genre' => 'Adventure | Animation | Fantasy | Musical',
                'time_slots' => '12:00,15:00,18:00,21:00',
                'cinema_room' => 1,
            ],
            [
                'title' => 'Wicked',
                'year' => '2024',
                'rated' => 'PG',
                'duration' => '2hr 40min',
                'picture' => 'wicked.jpg',
                'description' => "Elphaba, a young woman ridiculed for her green skin, and Galinda, a popular girl, become friends at Shiz University in the Land of Oz. After an encounter with the Wonderful Wizard of Oz, their friendship reaches a crossroads.",
                'main_cast' => 'Cynthia Erivo | Ariana Grande | Jeff Goldblum',
                'director' => 'Jon M Chu',
                'genre' => 'Fairy Tale | Romance | Fantasy',
                'time_slots' => '12:00,15:00,18:00,21:00',
                'cinema_room' => 2,
            ],
            [
                'title' => 'Top Gun: Maverick',
                'year' => '2022',
                'rated' => 'PG-13',
                'duration' => '2hr 11min',
                'picture' => 'topgun_maverick.jpg',
                'description' => "After more than thirty years of service as one of the Navy's top aviators, Pete 'Maverick' Mitchell is where he belongs, pushing the envelope as a courageous test pilot.",
                'main_cast' => 'Tom Cruise | Miles Teller | Jennifer Connelly',
                'director' => 'Joseph Kosinski',
                'genre' => 'Action | Drama',
                'time_slots' => '13:00,16:00,19:00,22:00',
                'cinema_room' => 3,
            ],
            [
                'title' => 'The Conjuring',
                'year' => '2013',
                'rated' => 'R',
                'duration' => '1hr 52min',
                'picture' => 'the_conjuring.jpg',
                'description' => "Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.",
                'main_cast' => 'Vera Farmiga | Patrick Wilson | Lili Taylor',
                'director' => 'James Wan',
                'genre' => 'Horror | Mystery | Thriller',
                'time_slots' => '14:00,17:00,20:00,23:00',
                'cinema_room' => 4,
            ],
            [
                'title' => 'Inception',
                'year' => '2010',
                'rated' => 'PG-13',
                'duration' => '2hr 28min',
                'picture' => 'inception.jpg',
                'description' => "A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.",
                'main_cast' => 'Leonardo DiCaprio | Joseph Gordon-Levitt | Ellen Page',
                'director' => 'Christopher Nolan',
                'genre' => 'Action | Adventure | Sci-Fi',
                'time_slots' => '10:00,13:00,16:00,19:00',
                'cinema_room' => 5,
            ],
            [
                'title' => 'Avengers: Endgame',
                'year' => '2019',
                'rated' => 'PG-13',
                'duration' => '3hr 1min',
                'picture' => 'avengers_endgame.jpg',
                'description' => "After the devastating events of Avengers: Infinity War, the universe is in ruins. With the help of remaining allies, the Avengers assemble once more.",
                'main_cast' => 'Robert Downey Jr. | Chris Evans | Mark Ruffalo',
                'director' => 'Anthony Russo | Joe Russo',
                'genre' => 'Action | Adventure | Drama',
                'time_slots' => '11:00,15:00,18:00,21:00',
                'cinema_room' => 6,
            ],
        ]);
    }
}
