<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Cinema Dev - Manage Movies </title>

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

    </style>
</head>

<body>

    <div class="container">

        <button type="button" class="btn btn-light">
            <a href="/devhome"> Back</a>
        </button>

        <h2>Manage Movie</h2>

        <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn btn-dark">
                <a href="/devhome" style="color: white; text-decoration: none;">Add Movie</a>
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie Title</th>
                        <th scope="col">Year/Rated/Duration</th>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Frozen</td>
                        <td>2013 • PG • 1hr 42min</td>
                        <td>
                            <img src="https://m.media-amazon.com/images/M/MV5BMTQ1MjQwMTE5OF5BMl5BanBnXkFtZTgwNjk3MTcyMDE@._V1_.jpg"
                                style="width: 60px; height: auto; object-fit: cover;">
                        </td>
                        <td> Fearless optimist Anna teams up with rugged mountain man Kristoff and his loyal reindeer
                            Sven in an epic journey to find Anna's sister Elsa, whose icy powers have trapped the
                            kingdom of Arendelle in eternal winter.</td>
                        <td>Kristen Bell | Idina Menzel | Jonathant Groff </td>
                        <td>Chris Buck | Jeniffer Lee</td>
                        <td>Adventure | Animation | Fantasy | Musical</td>
                        <td>12:00 | 15:00 | 18:00 | 21:00</td>
                        <td>1</td>
                        <td>
                            <button type="button" class="btn btn-light">
                                <a href="/editmovies" aria-label="System Users">Edit</a>
                            </button>
                            <div class = "btn btn-dark"> Delete </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Wicked</td>
                        <td>2024 • PG • 2hr 40min</td>
                        <td>
                            <img src="https://m.media-amazon.com/images/M/MV5BOWMwYjYzYmMtMWQ2Ni00NWUwLTg2MzAtYzkzMDBiZDIwOTMwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg"
                                style="width: 60px; height: auto; object-fit: cover;">
                        </td>
                        <td>Elphaba, a young woman ridiculed for her green skin, and Galinda, a popular girl, become
                            friends at Shiz University in the Land of Oz. After an encounter with the Wonderful Wizard
                            of Oz, their friendship reaches a crossroads.</td>
                        <td>Cynthia Erivo | Ariana Grande | Jeff Goldblum</td>
                        <td>Jon M Chu</td>
                        <td>Fairy Tale | Romance | Fantasy</td>
                        <td>12:00 | 15:00 | 18:00 | 21:00</td>
                        <td>2</td>
                        <td>
                            <div class = "btn btn-light"> Edit </div>
                            <div class = "btn btn-dark"> Delete </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
