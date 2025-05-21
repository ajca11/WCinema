@extends('template.main')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Teachers:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Teachers', sans-serif;
            background-color: #fff;
        }

        .carousel-wrapper {
            position: relative;
            padding: 10px 0;
            overflow: hidden;
        }

        .scroll-container {
            display: flex;
            overflow-x: auto;
            gap: 12px;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
            padding: 10px 20px;
        }

        .scroll-container::-webkit-scrollbar {
            display: none;
        }

        .movie-card {
            flex: 0 0 auto;
            width: 240px;
            border-radius: 12px;
            overflow: hidden;
            scroll-snap-align: start;
            background-color: transparent;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .movie-card:hover {
            transform: scale(1.05);
            z-index: 2;
        }

        .movie-poster {
            width: 100%;
            height: 360px;
            object-fit: cover;
            display: block;
        }

        .movie-title {
            font-size: 16px;
            font-weight: 700;
            color: #333;
            margin: 12px 12px 4px;
        }

        .movie-subinfo {
            font-size: 12px;
            color: #666;
            margin: 0 12px 8px;
        }

        .movie-details {
            padding: 0 12px 12px;
            font-size: 14px;
        }

        .btn-book {
            display: block;
            margin: 0 12px 12px;
            padding: 8px 0;
            background-color: #343a40;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
        }

        .btn-book:hover {
            background-color: #23272b;
        }

        .carousel-controls {
            text-align: center;
            margin: 20px 0;
        }

        .carousel-button {
            background-color: #343a40;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            margin: 0 10px;
            cursor: pointer;
        }

        .welcome {
            width: 100%;
            max-width: 1000px;
            height: auto;
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px 20px;
            font-size: 2rem;
            font-weight: 600;
            color: #333;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        footer a {
            transition: color 0.2s ease;
        }

        footer a:hover {
            color: #000;
        }
    </style>

    <div class="container card welcome mb-4">
        Most Viewed Trailer
        <div class="ratio ratio-16x9 mt-3" style="max-width: 800px; width: 100%;">
            <iframe src="https://www.youtube.com/embed/6COmYeLsz4c" title="Official Movie Trailer" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>

    <h1 id="now-showing-section" class="text-center mt-4 mb-2 fw-semibold">Now Showing</h1>
    <div class="carousel-wrapper">
        <div class="scroll-container" id="slider-now-showing">
            @foreach ($movies as $movie)
                <div class="movie-card">
                    <h2 class="movie-title">{{ $movie->title }}</h2>
                    <p class="movie-subinfo">{{ $movie->year }} / {{ $movie->rated }} / {{ $movie->duration }}</p>
                    <img src="{{ $movie->picture }}" class="movie-poster" alt="Poster of {{ $movie->title }}">
                    <div class="movie-details">
                        <p><strong>Cast:</strong> {{ $movie->main_cast }}</p>
                        <p><strong>Director:</strong> {{ $movie->director }}</p>
                        <p><strong>Time:</strong> {{ $movie->time_slots }}</p>
                    </div>
                    <a href="/booking" class="btn-book">Book Now</a>
                </div>
            @endforeach
        </div>
        <div class="carousel-controls">
            <button class="carousel-button" onclick="scrollSlider('now-showing', -1)">&#8592; Prev</button>
            <button class="carousel-button" onclick="scrollSlider('now-showing', 1)">Next &#8594;</button>
        </div>
    </div>

    <h1 id="coming-soon" class="text-center mt-4 mb-2 fw-semibold">Coming Soon</h1>
    <div class="carousel-wrapper">
        <div class="scroll-container" id="slider-coming-soon">
            @php
                $upcoming = [
                    [
                        'title' => 'Dune: Part Two',
                        'subinfo' => '2024 / PG-13 / 2h 46m',
                        'img' => 'https://m.media-amazon.com/images/M/MV5BNTc0YmQxMjEtODI5MC00NjFiLTlkMWUtOGQ5NjFmYWUyZGJhXkEyXkFqcGc@._V1_.jpg',
                        'cast' => 'Timothée Chalamet, Zendaya, Rebecca Ferguson',
                        'director' => 'Denis Villeneuve',
                        'time' => '1:30 PM, 4:00 PM, 7:30 PM',
                    ],
                    [
                        'title' => 'Deadpool & Wolverine',
                        'subinfo' => '2024 / R / 2h 7m',
                        'img' => 'https://m.media-amazon.com/images/M/MV5BZTk5ODY0MmQtMzA3Ni00NGY1LThiYzItZThiNjFiNDM4MTM3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                        'cast' => 'Ryan Reynolds, Hugh Jackman',
                        'director' => 'Shawn Levy',
                        'time' => '12:00 PM, 3:00 PM, 6:00 PM',
                    ],
                    [
                        'title' => 'Inside Out 2',
                        'subinfo' => '2024 / PG / 1h 40m',
                        'img' => 'https://m.media-amazon.com/images/M/MV5BYWY3MDE2Y2UtOTE3Zi00MGUzLTg2MTItZjE1ZWVkMGVlODRmXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                        'cast' => 'Amy Poehler, Maya Hawke',
                        'director' => 'Kelsey Mann',
                        'time' => '11:00 AM, 2:00 PM, 5:00 PM',
                    ],
                    [
                        'title' => 'A Quiet Place: Day One',
                        'subinfo' => '2024 / PG-13 / 1h 50m',
                        'img' => 'https://m.media-amazon.com/images/M/MV5BMDdjZTljZWMtMDIwNi00MTA5LTkxZmItNmY0NDA3ZDM0N2M2XkEyXkFqcGc@._V1_.jpg',
                        'cast' => 'Lupita Nyong\'o, Joseph Quinn',
                        'director' => 'Michael Sarnoski',
                        'time' => '1:00 PM, 4:30 PM, 8:00 PM',
                    ],
                    [
                        'title' => 'Joker: Folie à Deux',
                        'subinfo' => '2024 / R / 2h 12m',
                        'img' => 'https://m.media-amazon.com/images/M/MV5BNTRlNmU1NzEtODNkNC00ZGM3LWFmNzQtMjBlMWRiYTcyMGRhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg',
                        'cast' => 'Joaquin Phoenix, Lady Gaga',
                        'director' => 'Todd Phillips',
                        'time' => '2:00 PM, 5:00 PM, 9:00 PM',
                    ],
                ];
            @endphp

            @foreach ($upcoming as $movie)
                <div class="movie-card">
                    <h2 class="movie-title">{{ $movie['title'] }}</h2>
                    <p class="movie-subinfo">{{ $movie['subinfo'] }}</p>
                    <img src="{{ $movie['img'] }}" class="movie-poster" alt="Poster of {{ $movie['title'] }}">
                    <div class="movie-details">
                        <p><strong>Cast:</strong> {{ $movie['cast'] }}</p>
                        <p><strong>Director:</strong> {{ $movie['director'] }}</p>
                        <p><strong>Time:</strong> {{ $movie['time'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function scrollSlider(id, direction) {
            const container = document.getElementById(`slider-${id}`);
            const cardWidth = 370;
            container.scrollBy({
                left: direction * cardWidth,
                behavior: 'smooth'
            });
        }
    </script>

    <footer class="bg-light text-dark mt-5 pt-4 pb-3 border-top">
        <div class="container text-center">
            <p class="mb-1 fs-5 fw-semibold" style="font-family: 'Poppins', sans-serif;">Ayala Malls Cinema</p>
            <p class="mb-2 small text-muted">Your trusted cinema reservation platform.</p>
            <div class="d-flex justify-content-center gap-3 mb-2">
                <a href="#" class="text-dark text-decoration-none">Home</a>
                <a href="#" class="text-dark text-decoration-none">About</a>
                <a href="#" class="text-dark text-decoration-none">Contact</a>
                <a href="#" class="text-dark text-decoration-none">Support</a>
            </div>
            <p class="mb-0 small text-muted">All rights reserved.</p>
        </div>
    </footer>
@endsection
