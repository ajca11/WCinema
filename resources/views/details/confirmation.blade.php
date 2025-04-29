<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
        href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Cinema - Movie Details </title>

    <h5 class = "mt-2" style = "text-align: center; font-size: small;"> Company Name </h5>

    <div class = "rounded-3 left"
        style = "background-color: #bbbbbb00; font-size: large; font-family: 'Teachers', sans-serif">

        <ul class = "nav nav-tabs card-header-tabs justify-content-start">

            <li class = "nav-item">
                <a class = "nav-link disabled" aria-current="true" href = "#"> COMPANY LOGO </a>
            </li>

            <li class = "nav-item">
                <a class = "nav-link disabled" aria-current="true" href = "#"> Home </a>
            </li>

            <li class = "nav-item">
                <a class = "nav-link disabled" href = "#"> Now Showing </a>
            </li>

            <li class = "nav-item">
                <a class = "nav-link disabled" aria-current="true" href = "#"> About Us </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    More
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>

        </ul>
    </div>
    </div>
    </div>

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

        .button{
            width: 40;
            height: auto;
            font-size: 20px;
        }

        .form-control{
            width: 50%;
            height: auto;
        }

        .btn1{
            margin-left: 45%;
        }

        .btn2{
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
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
