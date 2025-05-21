<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css2?family=Teachers:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Edit Movie - Cinema Dev</title>

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

        .btn {
            margin-top: 20px;
            margin-right: 10px;
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

        label {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="container">
        <button type="button" class="btn btn-light">
            <a href="/manage">Back</a>
        </button>

        <h2>Edit Movie</h2>

        <form method="POST" action="{{ route('manage.update', $movie->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ $movie->year }}" required>
            </div>

            <div class="mb-3">
                <label for="rated" class="form-label">Rated</label>
                <input type="text" class="form-control" id="rated" name="rated" value="{{ $movie->rated }}" required>
            </div>

            <div class="mb-3">
                <label for="duration" class="form-label">Duration (in minutes)</label>
                <input type="text" class="form-control" id="duration" name="duration" value="{{ $movie->duration }}" required>
            </div>

            <div class="mb-3">
                <label for="picture" class="form-label">Poster Image</label>
                <input type="file" class="form-control" id="picture" name="picture" value="{{ $movie->picture }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4">{{ $movie->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="main_cast" class="form-label">Main Cast</label>
                <input type="text" class="form-control" id="main_cast" name="main_cast" value="{{ $movie->main_cast }}">
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ $movie->director }}">
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ $movie->genre }}">
            </div>

            <div class="mb-3">
                <label for="time_slots" class="form-label">Time Slots (comma-separated)</label>
                <input type="text" class="form-control" id="time_slots" name="time_slots" value="{{ $movie->time_slots }}">
            </div>

            <div class="mb-3">
                <label for="cinema_room" class="form-label">Cinema Room</label>
                <input type="text" class="form-control" id="cinema_room" name="cinema_room" value="{{ $movie->cinema_room }}">
            </div>

            <button type="submit" class="btn btn-dark">Save Changes</button>
            <a href="{{ route('manage.index') }}" class="btn btn-light">Cancel</a>
        </form>
    </div>

</body>

</html>
