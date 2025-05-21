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
        position: relative;
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

    .movie-overlay {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.9);
        padding: 12px;
        font-size: 14px;
    }

    .movie-title {
        font-size: 16px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .movie-subinfo {
        font-size: 12px;
        color: #666;
    }

    .btn-book {
        display: inline-block;
        margin-top: 10px;
        width: 100%;
        padding: 8px 0;
        background-color: #343a40;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        text-align: center;
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
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 10px;
        margin: 0 10px;
        cursor: pointer;
    }

    .welcome {
        height: 250px;
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
            <div class="movie-card">
                <h2 class="movie-title">Dune: Part Two</h2>
                <p class="movie-subinfo">2024 / PG-13 / 2h 46m</p>
                <img src="https://m.media-amazon.com/images/M/MV5BNTc0YmQxMjEtODI5MC00NjFiLTlkMWUtOGQ5NjFmYWUyZGJhXkEyXkFqcGc@._V1_.jpg"
                    class="movie-poster" alt="Poster of Dune: Part Two">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Timothée Chalamet, Zendaya, Rebecca Ferguson</p>
                    <p><strong>Director:</strong> Denis Villeneuve</p>
                    <p><strong>Time:</strong> 1:30 PM, 4:00 PM, 7:30 PM</p>
                </div>
            </div>
            <div class="movie-card">
                <h2 class="movie-title">Deadpool & Wolverine</h2>
                <p class="movie-subinfo">2024 / R / 2h 7m</p>
                <img src="https://m.media-amazon.com/images/M/MV5BZTk5ODY0MmQtMzA3Ni00NGY1LThiYzItZThiNjFiNDM4MTM3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                    class="movie-poster" alt="Poster of Deadpool & Wolverine">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Ryan Reynolds, Hugh Jackman</p>
                    <p><strong>Director:</strong> Shawn Levy</p>
                    <p><strong>Time:</strong> 12:00 PM, 3:00 PM, 6:00 PM</p>
                </div>
            </div>
            <div class="movie-card">
                <h2 class="movie-title">Inside Out 2</h2>
                <p class="movie-subinfo">2024 / PG / 1h 40m</p>
                <img src="https://m.media-amazon.com/images/M/MV5BYWY3MDE2Y2UtOTE3Zi00MGUzLTg2MTItZjE1ZWVkMGVlODRmXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                    class="movie-poster" alt="Poster of Inside Out 2">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Amy Poehler, Maya Hawke</p>
                    <p><strong>Director:</strong> Kelsey Mann</p>
                    <p><strong>Time:</strong> 11:00 AM, 2:00 PM, 5:00 PM</p>
                </div>
            </div>
            <div class="movie-card">
                <h2 class="movie-title">A Quiet Place: Day One</h2>
                <p class="movie-subinfo">2024 / PG-13 / 1h 50m</p>
                <img src="https://m.media-amazon.com/images/M/MV5BMDdjZTljZWMtMDIwNi00MTA5LTkxZmItNmY0NDA3ZDM0N2M2XkEyXkFqcGc@._V1_.jpg"
                    class="movie-poster" alt="Poster of A Quiet Place: Day One">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Lupita Nyong'o, Joseph Quinn</p>
                    <p><strong>Director:</strong> Michael Sarnoski</p>
                    <p><strong>Time:</strong> 1:00 PM, 4:30 PM, 8:00 PM</p>
                </div>
            </div>
            <div class="movie-card">
                <h2 class="movie-title">Joker: Folie à Deux</h2>
                <p class="movie-subinfo">2024 / R / 2h 12m</p>
                <img src="https://m.media-amazon.com/images/M/MV5BNTRlNmU1NzEtODNkNC00ZGM3LWFmNzQtMjBlMWRiYTcyMGRhXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                    class="movie-poster" alt="Poster of Joker: Folie à Deux">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Joaquin Phoenix, Lady Gaga</p>
                    <p><strong>Director:</strong> Todd Phillips</p>
                    <p><strong>Time:</strong> 2:00 PM, 5:00 PM, 9:00 PM</p>
                </div>
            </div>
        </div>
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
            <p class="mb-0 small text-muted"> All rights reserved.</p>
        </div>
    </footer>
@endsection
