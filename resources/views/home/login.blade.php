<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinema - Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Teachers', sans-serif;
            background-color: #fff;
        }

        .container {
            max-width: 500px;
            margin-top: 180px;
            padding: 2rem;
            background-color: #f8f9fa;
            border-radius: 20px;
        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }

        label {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 20px;
            background-color:rgb(234, 232, 232);
            padding: 12px 16px;
            font-size: 1rem;
        }

        .btn-submit {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            border-radius: 30px;
            font-size: 1.1rem;
            background-color:rgb(159, 158, 158);
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #444;
        }

        p {
            text-align: center;
            margin-top: 15px;
            color: #666;
            font-size: 0.95rem;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .logo {
            display: block;
            margin: 0 auto 30px;
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Login</h1>

        <form method="POST" action="/login">
            @csrf()

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <button type="submit" class="btn btn-submit">Login</button>
            <p>Not yet a member? <a href="/registration">Register Now</a></p>
        </form>
    </div>

</body>

</html>
