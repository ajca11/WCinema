<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinema - Home</title>

    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Teachers', sans-serif;
        }

        .navbar-custom {
            background-color: transparent;
            font-size: large;
        }

        .navbar-brand,
        .nav-link {
            color: #333;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #000;
        }

        .dropdown-menu {
            font-size: 1rem;
        }

        h5.company-name {
            text-align: center;
            font-size: small;
            margin-top: 10px;
            color: #555;
        }
    </style>
</head>

<body>
    <h5 class="company-name">Cinema</h5>



    <nav class="navbar navbar-expand-lg navbar-light navbar-custom px-3">
        <div class="container-fluid">
            <a class="navbar-brand disabled" href="#">Ayala Malls Cinema</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#now-showing-section">Now Showing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#coming-soon">Coming Soon</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Account</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/login">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>
</body>

</html>
