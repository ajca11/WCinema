<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Edit Movie - Cinema Dev</title>

    <style>
        body {
            font-family: 'Teachers', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 900px;
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

        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Movie Title</label>
                <input type="text" class="form-control" id="title" value="Frozen">
            </div>

            <div class="mb-3">
                <label for="yearRatedDuration" class="form-label">Year / Rated / Duration</label>
                <input type="text" class="form-control" id="yearRatedDuration" value="2013 • PG • 1hr 42min">
            </div>

            <div class="mb-3">
                <label for="poster" class="form-label">Picture URL</label>
                <input type="url" class="form-control" id="poster"
                    value="https://m.media-amazon.com/images/M/MV5BMTQ1MjQwMTE5OF5BMl5BanBnXkFtZTgwNjk3MTcyMDE@._V1_.jpg">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3">Fearless optimist Anna teams up with rugged mountain man Kristoff and his loyal reindeer Sven...</textarea>
            </div>

            <div class="mb-3">
                <label for="cast" class="form-label">Main Cast</label>
                <input type="text" class="form-control" id="cast"
                    value="Kristen Bell | Idina Menzel | Jonathant Groff">
            </div>

            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" value="Chris Buck | Jeniffer Lee">
            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre"
                    value="Adventure | Animation | Fantasy | Musical">
            </div>

            <div class="mb-3">
                <label for="times" class="form-label">Time Slots (separate by | )</label>
                <input type="text" class="form-control" id="times" value="12:00 | 15:00 | 18:00 | 21:00">
            </div>

            <div class="mb-3">
                <label for="room" class="form-label">Cinema Room</label>
                <input type="number" class="form-control" id="room" value="1" min="1">
            </div>

            <button type="submit" class="btn btn-dark">Save Changes</button>
        </form>

    </div>

</body>

</html>
