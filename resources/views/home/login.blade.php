<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cinema - Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Special+Gothic+Expanded+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <style>
        .container1 {
            margin-top: 200px;
            width: 600px;
            height: 330px;
            border-radius: 50px;
        }

        .button {
            width: 150px;
            height: 65px;
            border-radius: 50px;
            margin: 20px auto 0;
            display: block;
        }

        body {
        font-family: 'Special Gothic Expanded One', sans-serif;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #f8f9fa;
        }
    </style>


</head>

<body>
    <h1 class = "text-center"> SIGN UP </h1>

    <div class = "container1 shadow">
     <form>
        <div class="text-center mt-3">
            <p style = "font-size: 30px;">USERNAME</p>
            <input type="email" class="form-control mx-auto"
                style = "border-radius: 50px;  background-color:rgb(241, 239, 239); width: 70%;" id="username"
                aria-describedby="emailHelp">
        </div>

        <div class="text-center mt-3">
            <p style = "font-size: 30px;">PASSWORD</p>
            <input type="password" class="form-control mx-auto"
                style = "border-radius: 50px; background-color:rgb(241, 239, 239); width: 70%;" id="password">
        </div>

        <button type="submit" class="button btn btn-dark">Submit</button>
        </form>
    </div>

</body>

</html>
