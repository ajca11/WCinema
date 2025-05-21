<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Teachers', sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .form-control {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #f8f9fa;
            color: #333;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e2e6ea;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Register</h1>

        <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="/register" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
                <div class="invalid-feedback">
                    Please enter your name.
                </div>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
                <div class="invalid-feedback">
                    Please enter a username.
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                <div class="invalid-feedback">
                    Please enter your phone number.
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="invalid-feedback">
                    Please enter a password.
                </div>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                <div class="invalid-feedback">
                    Please confirm your password.
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>