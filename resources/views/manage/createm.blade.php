<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Movie - Cinema Dev</title>

    <link href="https://fonts.googleapis.com/css2?family=Teachers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Teachers', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
            margin-top: 80px;
            background-color: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            font-weight: 600;
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
        <button type="button" class="btn btn-light mb-3">
            <a href="/manage">Back</a>
        </button>

        <h2>Add New Movie</h2>

        <form action="{{ route('manage.manage') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Movie Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="e.g. 2023" required>
            </div>

            <div class="mb-3">
                <label for="rated" class="form-label">Rated</label>
                <input type="text" class="form-control" id="rated" name="rated" placeholder="e.g. PG-13" required>
            </div>

            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" placeholder="e.g. 1hr 45min" required>
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Picture (Upload Image)</label>
                <input type="file" class="form-control" id="picture" name="picture" accept="image/*">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="main_cast" class="form-label">Main Cast</label>
                <input type="text" class="form-control" id="main_cast" name="main_cast" placeholder="Actor A | Actor B" required>
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" required>
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Action | Comedy | Drama" required>
            </div>

            <div class="mb-3">
                <label for="time_slots" class="form-label">Time Slots</label>
                <input type="text" class="form-control" id="time_slots" name="time_slots" placeholder="12:00 | 15:00 | 18:00" required>
            </div>

            <div class="mb-3">
                <label for="cinema_room" class="form-label">Cinema Room</label>
                <input type="number" class="form-control" id="cinema_room" name="cinema_room" min="1" required>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">Create Movie</button>
            </div>
        </form>
    </div>

</body>

</html>
