@extends('template.main')

@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Teachers', sans-serif;
        }

        .carousel-wrapper {
            position: relative;
            padding: 40px;
        }

        .scroll-container {
            display: flex;
            overflow-x: scroll;
            gap: 20px;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .scroll-container::-webkit-scrollbar {
            display: none;
        }

        .movie-card {
            flex: 0 0 auto;
            width: 400px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
            font-size: 14px;
            width: 100%;
            height: 40px;
            background-color: #343a40;
            color: white;
            border: none;
            transition: 0.3s ease;
        }

        .btn-book:hover {
            background-color: #23272b;
        }

        .carousel-controls {
            text-align: center;
            margin-top: 10px;
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
    </style>

    <h1 class="text-center mt-4 mb-2" style="font-weight: 600;">Now Showing</h1>

    <div class="carousel-wrapper">
        <div class="scroll-container" id="movieSlider">

            <div class="movie-card">
                <h2 class="movie-title">A Minecraft Movie</h2>
                <p class="movie-subinfo">2025 • PG • 1hr 40min</p>
                <img src="https://m.media-amazon.com/images/M/MV5BYzFjMzNjOTktNDBlNy00YWZhLWExYTctZDcxNDA4OWVhOTJjXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                    class="movie-poster">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Jack Black, Jason Momoa</p>
                    <p><strong>Director:</strong> Jared Hess</p>
                    <p><strong>Time:</strong> 12:00 | 15:00 | 18:00</p>
                </div>
                <button class="btn-book">Book Now</button>
            </div>

            <div class="movie-card">
                <h2 class="movie-title">Frozen Kingdom</h2>
                <p class="movie-subinfo">2024 • G • 1hr 30min</p>
                <img src="https://m.media-amazon.com/images/M/MV5BMTQ1MjQwMTE5OF5BMl5BanBnXkFtZTgwNjk3MTcyMDE@._V1_.jpg"
                    class="movie-poster">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Idina Menzel, Kristen Bell</p>
                    <p><strong>Director:</strong> Chris Buck</p>
                    <p><strong>Time:</strong> 11:00 | 14:00 | 17:00</p>
                </div>
                <button class="btn-book">Book Now</button>
            </div>

            <div class="movie-card">
                <h2 class="movie-title">Fast X</h2>
                <p class="movie-subinfo">2023 • PG-13 • 2hr 10min</p>
                <img src="https://m.media-amazon.com/images/M/MV5BYzEwZjczOTktYzU1OS00YjJlLTgyY2UtNWEzODBlN2RjZDEwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                    class="movie-poster">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Vin Diesel, Jason Momoa</p>
                    <p><strong>Director:</strong> Louis Leterrier</p>
                    <p><strong>Time:</strong> 13:00 | 16:00 | 19:00</p>
                </div>
                <button class="btn-book"><a href="/booking" aria-label="System Users">Book Now</a></button>
            </div>

            <div class="movie-card">
                <h2 class="movie-title">Inside Out 2</h2>
                <p class="movie-subinfo">2025 • PG • 1hr 35min</p>
                <img src="https://m.media-amazon.com/images/M/MV5BYWY3MDE2Y2UtOTE3Zi00MGUzLTg2MTItZjE1ZWVkMGVlODRmXkEyXkFqcGc@._V1_.jpg"
                    class="movie-poster">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Amy Poehler, Maya Hawke</p>
                    <p><strong>Director:</strong> Kelsey Mann</p>
                    <p><strong>Time:</strong> 10:00 | 13:00 | 18:00</p>
                </div>
                <button class="btn-book">Book Now</button>
            </div>

            <div class="movie-card">
                <h2 class="movie-title">Barbie</h2>
                <p class="movie-subinfo">2023 • PG • 2hr 5min</p>
                <img src="https://m.media-amazon.com/images/M/MV5BYjI3NDU0ZGYtYjA2YS00Y2RlLTgwZDAtYTE2YTM5ZjE1M2JlXkEyXkFqcGc@._V1_.jpg"
                    class="movie-poster">
                <div class="movie-details">
                    <p><strong>Cast:</strong> Margot Robbie, Ryan Gosling</p>
                    <p><strong>Director:</strong> Greta Gerwig</p>
                    <p><strong>Time:</strong> 12:00 | 15:00 | 18:00</p>
                </div>
                <button class="btn-book">Book Now</button>
            </div>

        </div>

        <div class="carousel-controls">
            <button class="carousel-button" onclick="scrollSlider(-1)">&#8592; Prev</button>
            <button class="carousel-button" onclick="scrollSlider(1)">Next &#8594;</button>
        </div>
    </div>

    <script>
        function scrollSlider(direction) {
            const container = document.getElementById('movieSlider');
            const cardWidth = 420;
            container.scrollBy({
                left: direction * cardWidth,
                behavior: 'smooth'
            });
        }
    </script>
@endsection
