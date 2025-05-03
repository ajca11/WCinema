@extends('template.main')

@section('content')

<head>
    <style>
        .logo {
            background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/REM_Beauty_cosmetics_brand_logo.webp/1200px-REM_Beauty_cosmetics_brand_logo.webp.png");
            background-size: cover;
        }

        .body {
            font-family: 'Teachers', sans-serif;
            font-size: large;
        }

        .left {
            margin-left: 30px;
        }

        .card {
            width: 1000px;
            height: 500px;
            margin-top: 10px;
            margin-left: 20px;
        }

        .body {
            font-family: 'Teachers', sans-serif;
        }
        
        .movie-poster {
        width: 300px;
        height: auto;
        border-radius: 
    }

        .button{
            width: 40;
            height: auto;
            font-size: 20px;
        }
        
    </style>

</head>

<body style = "font-family: 'Teachers', sans-serif;">
    <div>
        <p class = "mx-5 mt-3"> Movie Details
        <p>
        <div class = "card">
            <h1 class = "mx-4 mt-3"> A Minecraft Movie </h1>
            <p class = "mx-4"> 2025 • PG • 1hr 40 min </p>
            <img srchttps://m.media-amazon.com/images/M/MV5BYzFjMzNjOTktNDBlNy00YWZhLWExYTctZDcxNDA4OWVhOTJjXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg class="img-fluid"  alt="...">

            <p class = "mx-4" style = "font-size: medium"> Main Cast: Jack Black | Jason Mamoa | Danielle Brooks </p>
            <p class = "mx-4" style = "font-size: medium"> Director: Jared Hess </p>
            <p class = "mx-4" style = "font-size: medium"> Genre: Adventure | Comedy | Family | Fantasy </p>
            <p class = "mx-4" style = "font-size: medium"> Time Slots: 12:00 | 15:00 | 18:00 | 21:00 </p>
            <p class = "mx-4" style = "font-size: medium"> Cinema: 4 </p>

            <button type="button" class="button btn btn-dark mx-auto"> Book Now </button>

        </div>
    </div>

 
</body>

@endsection