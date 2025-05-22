<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Teachers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Cinema Dev - Manage Movies</title>

    <style>
        body {
            font-family: 'Teachers', sans-serif;
            background-color: #f8f9fa;
        }

        h5 {
            text-align: center;
            font-size: small;
            margin-top: 10px;
            color: #888;
        }

        .container {
            max-width: 1800px;
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

        table th,
        table td {
            vertical-align: middle;
            text-align: center;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            h2 {
                font-size: 24px;
            }

            table {
                font-size: 14px;
            }
        }

        .btn {
            margin-left: 10px;
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

        <button type="button" class="btn btn-light">
            <a href="/devhome">Back</a>
        </button>

        <h2>Manage Movie</h2>

        <div class="d-flex justify-content-end mb-3">
            <a href="/createm" class="btn btn-dark" style="color: white;">Add Movie</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie Title</th>
                        <th scope="col">Year / Rated / Duration</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Description</th>
                        <th scope="col">Main Cast</th>
                        <th scope="col">Director</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Time Slots</th>
                        <th scope="col">Cinema Room</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->year }} / {{ $movie->rated }} / {{ $movie->duration }}</td>
                        <td>
                            @if ($movie->picture)
                                <img src="{{$movie->picture }}" alt="Movie Picture" width="50">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>{{ $movie->description }}</td>
                        <td>{{ $movie->main_cast }}</td>
                        <td>{{ $movie->director }}</td>
                        <td>{{ $movie->genre }}</td>
                        <td>{{ $movie->time_slots }}</td>
                        <td>{{ $movie->cinema_room }}</td>
                        <td>
                            <a href="{{ route('manage.editmovies', $movie->id) }}" class="btn btn-light">Edit</a>
                            <form action="{{ route('manage.destroy', $movie->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-dark" onclick="return confirm('Delete this movie')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
