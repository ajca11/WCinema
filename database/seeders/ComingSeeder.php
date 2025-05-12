<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComingSeeder extends Seeder
{
    public function run(): void
    {
        \DB::table('movies')->delete();
        \DB::table('movies')->insert([
            [
                'title' => 'Dune: Part Two',
                'year' => '2024',
                'rated' => 'PG-13',
                'duration' => '2hr 46min',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BZGZhYjExMjEtZWYzZS00ZTk5LTkwNzgtOGY2Zjc0ZmE1YzBhXkEyXkFqcGc@._V1_.jpg',
                'description' => "Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family.",
                'main_cast' => 'Timothée Chalamet | Zendaya | Rebecca Ferguson',
                'director' => 'Denis Villeneuve',
                'genre' => 'Adventure | Sci-Fi | Drama',
                'time_slots' => '12:00,15:30,19:00,22:30',
                'cinema_room' => 1,
            ],
            [
                'title' => 'Inside Out 2',
                'year' => '2025',
                'rated' => 'PG',
                'duration' => '1hr 45min',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMjQ2MzYxNmEtY2IwOC00MzZlLWIyMTgtZjcwM2IzMjcwYTk0XkEyXkFqcGc@._V1_.jpg',
                'description' => "Riley navigates her teenage years with new emotions joining the original crew inside her mind.",
                'main_cast' => 'Amy Poehler | Maya Hawke | Phyllis Smith',
                'director' => 'Kelsey Mann',
                'genre' => 'Animation | Comedy | Family',
                'time_slots' => '11:00,13:30,16:00,18:30',
                'cinema_room' => 2,
            ],
            [
                'title' => 'Oppenheimer',
                'year' => '2023',
                'rated' => 'R',
                'duration' => '3hr 0min',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMzM4NzQyNTUtYmFiYS00NzMzLTkzMmUtZTEwMzk5ZmM3MjE4XkEyXkFqcGc@._V1_.jpg',
                'description' => "The story of J. Robert Oppenheimer and the creation of the atomic bomb during World War II.",
                'main_cast' => 'Cillian Murphy | Emily Blunt | Matt Damon',
                'director' => 'Christopher Nolan',
                'genre' => 'Biography | Drama | History',
                'time_slots' => '14:00,17:30,21:00',
                'cinema_room' => 3,
            ],
            [
                'title' => 'Barbie',
                'year' => '2023',
                'rated' => 'PG-13',
                'duration' => '1hr 54min',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BMGE0MzRhNjAtZTFlZC00NjBhLTllYjUtOTRkNzI2ZDk0ZDE0XkEyXkFqcGc@._V1_.jpg',
                'description' => "Barbie and Ken experience the real world after leaving Barbieland in this colorful and satirical adventure.",
                'main_cast' => 'Margot Robbie | Ryan Gosling | Will Ferrell',
                'director' => 'Greta Gerwig',
                'genre' => 'Adventure | Comedy | Fantasy',
                'time_slots' => '10:30,13:00,15:30,18:00',
                'cinema_room' => 4,
            ],
            [
                'title' => 'Mission: Impossible – Dead Reckoning',
                'year' => '2023',
                'rated' => 'PG-13',
                'duration' => '2hr 43min',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BZTdlNjJmNDMtY2QzMC00MDk4LWE4MzctMDY0N2E4Y2MwNDgzXkEyXkFqcGc@._V1_.jpg',
                'description' => "Ethan Hunt and his team race against time to track down a terrifying new weapon before it falls into the wrong hands.",
                'main_cast' => 'Tom Cruise | Hayley Atwell | Ving Rhames',
                'director' => 'Christopher McQuarrie',
                'genre' => 'Action | Adventure | Thriller',
                'time_slots' => '12:00,15:00,18:00,21:00',
                'cinema_room' => 5,
            ],
            [
                'title' => 'Wonka',
                'year' => '2023',
                'rated' => 'PG',
                'duration' => '1hr 56min',
                'picture' => 'https://m.media-amazon.com/images/M/MV5BYjRiMzZjNzUtZTUzNC00ZTczLTgxNDctZTcwMzQ3NzRmNDY1XkEyXkFqcGc@._V1_.jpg',
                'description' => "A young Willy Wonka embarks on a magical adventure filled with imagination, chocolate, and dreams.",
                'main_cast' => 'Timothée Chalamet | Hugh Grant | Olivia Colman',
                'director' => 'Paul King',
                'genre' => 'Adventure | Comedy | Family',
                'time_slots' => '11:30,14:30,17:30,20:30',
                'cinema_room' => 6,
            ],
        ]);
    }
}
