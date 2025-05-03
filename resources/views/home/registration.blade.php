<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinema - Register</title>

    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
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
            max-width: 600px;
            margin-top: 100px;
            padding: 2.5rem;
            background-color: #f3f3f3;
            border-radius: 20px;
        }

        .logo {
            display: block;
            margin: 0 auto 30px;
            width: 100px;
            height: auto;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1.5rem;
        }

        label {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 20px;
            background-color: #e2e2e2;
            padding: 12px 16px;
            font-size: 1rem;
        }

        .btn-submit {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            border-radius: 30px;
            font-size: 1.1rem;
            background-color: #575757;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #444;
        }

        @media (max-width: 576px) {
            .container {
                padding: 1.5rem;
            }

            h1 {
                font-size: 2rem;
            }
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
        <button type="button" class="btn btn-dark">
            <a href="/login"> Back</a>
        </button>

        <h1>Register</h1>

        <form method="POST" action="/login">
            @csrf()

            <div class="mb-3">
                <label for="Name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="Name" required>
            </div>

            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" required>
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="number" required>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
            </div>

            <button type="submit" class="btn btn-submit">Register</button>
        </form>
    </div>

</body>

</html>
