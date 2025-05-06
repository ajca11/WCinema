@extends('template.main')

@section('content')

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Teachers', sans-serif;
                background-color: #fff;
            }

            .container {
                max-width: 800px;
                margin-top: 80px;
                margin-bottom: 60px;
            }

            h1 {
                text-align: center;
                font-size: 36px;
                color: #222;
                margin-bottom: 10px;
            }

            h5 {
                text-align: center;
                color: #888;
                margin-bottom: 30px;
            }

            .details-box {
                background-color: #f8f9fa;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            }

            .details-box label {
                font-weight: 600;
                color: #333;
            }

            .btn-back {
                margin-top: 30px;
                width: 100%;
                height: 50px;
                background-color: #1e1e1e;
                color: white;
                border: none;
                font-size: 18px;
                border-radius: 10px;
            }

            .btn-back:hover {
                background-color: #333;
            }

            .btn a {
                text-decoration: none;
                color: inherit;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Booking Confirmed</h1>
            <h5>Your reservation was successful!</h5>

            <div class="details-box mt-5">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label>Movie:</label>
                        <p>Minecraft Movie</p>

                        <label>Time Slot:</label>
                        <p>15:00</p>

                        <label>Tickets:</label>
                        <p>2</p>

                        <label>Cinema Room:</label>
                        <p>Cinema 4</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Name:</label>
                        <p>John Doe</p>

                        <label>Contact Number:</label>
                        <p>09123456789</p>

                        <label>Email:</label>
                        <p>johndoe@example.com</p>

                        <label>Payment Method:</label>
                        <p>Online Payment</p>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button class="btn btn-back"><a href="/home">Back to Home</a></button>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
@endsection
