<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Cinema Dev - Home</title>

    <style>
        body {
            font-family: 'Teachers', sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 230px;
        }

        h1 {
            text-align: center;
            font-size: 40px;
            color: #333;
        }

        h5 {
            text-align: center;
            font-size: small;
            margin-top: 10px;
            color: #888;
        }

        .btn {
            width: 100%;
            height: 70px;
            font-size: 20px;
            margin-top: 15px;
            transition: all 0.3s ease;
        }

        .btn-light {
            background-color: #f8f9fa;
            color: #333;
            border: none;
        }

        .btn-light:hover {
            background-color: #e2e6ea;
            color: #000;
        }

        .btn a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>

    <div class="container">
        <h5>Developer Mode</h5>
        <h1>Welcome Back, Admin!</h1>

        <button type="button" class="btn btn-light">
            <a href="/users" aria-label="System Users">System Users</a>
        </button>

        <button type="button" class="btn btn-light">
            <a href="/manage" aria-label="Manage Movies">Manage Movies</a>
        </button>

        <button type="button" class="btn btn-light">
            <a href="/reservation" aria-label="View Reservations">View Reservations</a>
        </button>

        <button type="button" class="btn btn-light">
            <a href="/login" aria-label="View Reservations">Log Out</a>
        </button>

    </div>

</body>

</html>
