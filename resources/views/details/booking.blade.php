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
                max-width: 1000px;
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

            label {
                font-weight: 600;
                margin-bottom: 6px;
            }

            .form-control,
            .btn-light {
                border-radius: 6px;
            }

            .btn-submit {
                width: 100%;
                height: 60px;
                font-size: 18px;
                background-color: #1e1e1e;
                color: white;
                border: none;
                margin-top: 30px;
                border-radius: 10px;
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
            <h1>Confirm Your Reservation</h1>

            <form>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label>Movie</label>
                            <div class="dropdown">
                                <button class="btn btn-light w-100 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    Select Movie
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li><a class="dropdown-item" href="#">Minecraft Movie</a></li>
                                    <li><a class="dropdown-item" href="#">Barbie Movie</a></li>
                                    <li><a class="dropdown-item" href="#">Frozen</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label>Time Slot</label>
                            <div class="dropdown">
                                <button class="btn btn-light w-100 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    Select Time
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li><a class="dropdown-item" href="#">12:00</a></li>
                                    <li><a class="dropdown-item" href="#">15:00</a></li>
                                    <li><a class="dropdown-item" href="#">19:00</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label>Tickets</label>
                            <div class="dropdown">
                                <button class="btn btn-light w-100 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    Select Tickets
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li><a class="dropdown-item" href="#">1</a></li>
                                    <li><a class="dropdown-item" href="#">2</a></li>
                                    <li><a class="dropdown-item" href="#">3 (Maximum)</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label>Cinema Room</label>
                            <input type="text" class="form-control-plaintext" readonly value="Cinema 4">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Your name">
                        </div>

                        <div class="mb-4">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" placeholder="e.g. 09123456789">
                        </div>

                        <div class="mb-4">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="you@example.com">
                        </div>

                        <div class="mb-4">
                            <label>Payment Method</label>
                            <div class="dropdown">
                                <button class="btn btn-light w-100 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    Select Payment
                                </button>
                                <ul class="dropdown-menu w-100">
                                    <li><a class="dropdown-item" href="#">Online Payment</a></li>
                                    <li><a class="dropdown-item" href="#">Over the Counter</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-submit"><a href="/confirmation" aria-label="System Users"> Sumbit </a> </button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
@endsection
