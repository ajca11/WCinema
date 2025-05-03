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

    <title>Cinema - Home</title>

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


</head>

<body>
    @yield('content')

</body>

</html>
