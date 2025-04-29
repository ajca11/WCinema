<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinema - Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Teachers', sans-serif;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            margin-top: 30px;
            padding: 1rem;
        }

        img {
            display: block;
            margin: 0;
            padding: 0;
            width: 150px;
            height: auto;
        }

        p1 {
            text-align: left;
            font-size: 75px;
            margin: 0;
            padding: 0;
            color: #5c5a5a;
        }

        p {
            text-align: center;
            font-size: 18px;
            margin: 0;
            padding: 0;
            color: #5c5a5a;
        }

        .card {
            border-radius: 30px;
            padding: 20px;
            height: auto;
            width: 100%;
            max-width: 600px;
            background-color: #f3f3f3;
        }

        .form-label {
            color: #6b6a6a;
            display: block;
            text-align: left;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
            background-color: #d5d5d5;
            transition: background-color 0.3s ease;
        }

        .btn-submit {
            display: block;
            width: 50%;
            height: 50px;
            border-radius: 30px;
            margin: 30px auto 0;
            font-size: 1.2rem;
            background-color: #575757;
        }

        .container {
            padding: 35px;
        }

        @media (max-width: 768px) {
            p1 {
                font-size: 50px;
            }

            .card {
                padding: 15px;
            }

            .form-label {
                font-size: 1.5rem;
            }

            .form-control {
                font-size: 1rem;
                padding: 8px 15px;
            }

            .btn-submit {
                width: 70%;
            }

            p {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            p1 {
                font-size: 40px;
            }

            .form-label {
                font-size: 1.2rem;
            }

            .form-control {
                font-size: 0.9rem;
                padding: 6px 12px;
            }

            .btn-submit {
                width: 80%;
                font-size: 1rem;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <img src="https://static.vecteezy.com/system/resources/thumbnails/023/608/676/small/movie-film-frame-png.png"
        alt="Logo">

    <div class="card">
        <div class="container">
            <p1>LOGIN</p1>
            <form method="POST" action="/login">
                @csrf()

                <div class="mb-4">
                    <label for="username" class="form-label">username</label>
                    <input type="text" name="username" class="form-control" id="username" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>

                <button type="submit" class="btn btn-dark btn-submit mb-4">login</button>
                <p>Not yet a member? <a href="/registration">Register Now </a> </p>

            </form>
        </div>
    </div>
</body>

</html>
