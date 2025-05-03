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
            height: auto;
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

        .button {
            width: 40;
            height: auto;
            font-size: 20px;
        }

        .form-control {
            width: 50%;
            height: auto;
        }

        .btn1 {
            margin-left: 45%;
        }

        .btn2 {
            width: 100px;
            height: auto;
        }
    </style>

</head>

<body style = "font-family: 'Teachers', sans-serif;">

    <div class ="container">
        <div class = "card">

            <h1 class = "mx-4 mt-3"> Movie Confirmation </h1>
            <h4 class = "mt-1 mx-4"> Movie Details </h4>

            <div class="mt-3 mx-4 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Movie</label>
                <div class="col-sm-10">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Select
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Minecraft Movie</a></li>
                            <li><a class="dropdown-item" href="#">Barbie Movie</a></li>
                            <li><a class="dropdown-item" href="#">Frozen</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="mt-3 mx-4 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Time Slot</label>
                <div class="col-sm-10">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Select
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">12:00</a></li>
                            <li><a class="dropdown-item" href="#">15:00</a></li>
                            <li><a class="dropdown-item" href="#">19:00</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class= "mt-3 mx-4 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tickets</label>
                <div class="col-sm-10">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Select
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">1</a></li>
                            <li><a class="dropdown-item" href="#">2</a></li>
                            <li><a class="dropdown-item" href="#">3 (Maximum) </a></li>
                        </ul>
                    </div>
                </div>
        </div>

        <div class="mt-3 mx-4 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Cinema Room</label>
            <div class="col-sm-10">
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Cinema 4">
                </div>
            </div>
        </div>

        <h4 class = "mt-4 mx-4"> Personal Details </h4>

        <div class="mt-3 mx-4 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <div>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="mt-3 mx-4 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Contact Number</label>
            <div class="col-sm-10">
                <div>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="mt-3 mx-4 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <div>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="mt-3 mx-4 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Payment Method</label>
            <div class="col-sm-10">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Select
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Online Payment</a></li>
                        <li><a class="dropdown-item" href="#">Over the Counter</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class = "btn1 mb-3"> <button type="submit" class="btn btn2 btn-dark">Submit</button> </div>

    </div>


</body>

@endsection