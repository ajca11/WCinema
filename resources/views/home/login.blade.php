<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cinema - Login</title>

  <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
      padding: 1rem;
    }

    .card {
      border-radius: 30px;
      padding: 20px;
      height: 340px;
      width: 100%;
      max-width: 600px;
      background-color: #f3f3f3;
    }

    p {
      text-align: center;
      font-size: 75px;
      margin-bottom: 5px;
      color: #7e7e7e;
    }

    .form-label {
      color: #7e7e7e;
      display: block;
      text-align: center;
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
    }

    .form-control {
      border-radius: 30px;
      padding: 10px 20px;
      background-color: #d6d6d6;
      transition: background-color 0.3s ease;
    }

    .form-control:focus {
      background-color: #fff;
      border-color: #343a40;
      box-shadow: none;
    }

    .btn-submit {
      display: block;
      width: 50%;
      height: 50px;
      border-radius: 30px;
      margin: 30px auto 0;
      font-size: 1.2rem;
      background-color: #545454;
    }
  </style>
</head>

<body>
  <p>LOGIN</p>
  <div class="card">
    <form method="post">
      <div class="mb-4">
        <label for="username" class="form-label">USERNAME</label>
        <input type="text" name="username" class="form-control" id="username" required>
      </div>

      <div class="mb-4">
        <label for="password" class="form-label">PASSWORD</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>

      <button type="submit" class="btn btn-dark btn-submit">LOGIN</button>
    </form>
  </div>
</body>

</html>
