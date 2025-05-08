@extends('template.main')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Teachers:wght@400..800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Teachers', sans-serif;
        }

        .carousel-wrapper {
            position: relative;
            padding: 40px 20px;
        }

        .scroll-container {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
            scrollbar-width: none;
        }

        .scroll-container::-webkit-scrollbar {
            display: none;
        }

        .movie-card {
            flex: 0 0 auto;
            width: 350px;
            background-color: #f8f9fa;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            padding: 20px;
            scroll-snap-align: start;
        }

        .movie-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .movie-subinfo {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .movie-poster {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .movie-details p {
            font-size: 14px;
            color: #444;
            margin: 4px 0;
        }

        .btn-book {
            margin-top: 10px;
            width: 100%;
            height: 45px;
            background-color: #343a40;
            color: white;
            border: none;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            line-height: 1.2;
        }

        .btn-book:hover {
            background-color: #23272b;
        }


        .carousel-controls {
            text-align: center;
            margin-top: 20px;
        }

        .carousel-button {
            background-color: #343a40;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
            margin: 0 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .carousel-button:hover {
            background-color: #23272b;
        }

        .welcome {
            height: 350px;
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 600;
            color: #333;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        footer a {
            transition: color 0.2s ease;
        }

        footer a:hover {
            color: #000;
        }
    </style>

    <div class="container card welcome mb-5">
        Welcome!
    </div>

    <h1 class="text-center mt-4 mb-2 fw-semibold">Now Showing</h1>
    <div class="carousel-wrapper">
        <div class="scroll-container" id="slider-0">
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
                    <a href="/booking" class="btn btn-book">Book Now</a>
                </div>
            @endforeach
        </div>
        <div class="carousel-controls">
            <button class="carousel-button" onclick="scrollSlider(0, -1)">&#8592; Prev</button>
            <button class="carousel-button" onclick="scrollSlider(0, 1)">Next &#8594;</button>
        </div>
    </div>

    <h1 class="text-center mt-4 mb-2 fw-semibold">Coming Soon</h1>
    <div class="carousel-wrapper">
        <div class="scroll-container" id="slider-0">
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
                    <a href="/booking" class="btn btn-book">Book Now</a>
                </div>
            @endforeach
        </div>
        <div class="carousel-controls">
            <button class="carousel-button" onclick="scrollSlider(0, -1)">&#8592; Prev</button>
            <button class="carousel-button" onclick="scrollSlider(0, 1)">Next &#8594;</button>
        </div>
    </div>

    <script>
        function scrollSlider(index, direction) {
            const container = document.getElementById(`slider-${index}`);
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
            <p class="mb-0 small text-muted">  All rights reserved.</p>
        </div>
    </footer>
@endsection
