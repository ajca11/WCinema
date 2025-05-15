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

    <title>Edit Reservation - Cinema Dev</title>

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
            <a href="/reservation">Back</a>
        </button>

        <h2>Edit Reservation</h2>

        <form method="POST" action="{{ route('reservations.update', $reservation->id) }}">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="movie_id" class="form-label">Movie</label>
                <select class="form-control" name="movie_id" required>
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}" {{ $reservation->movie_id == $movie->id ? 'selected' : '' }}>
                            {{ $movie->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="time_slot" class="form-label">Time Slot</label>
                <input type="text" class="form-control" name="time_slot" value="{{ $reservation->time_slot }}" required>
            </div>

            <div class="mb-3">
                <label for="tickets" class="form-label">Tickets</label>
                <input type="number" class="form-control" name="tickets" value="{{ $reservation->tickets }}" min="1" required>
            </div>

            <div class="mb-3">
                <label for="cinema_room" class="form-label">Cinema Room</label>
                <input type="number" class="form-control" name="cinema_room" value="{{ $reservation->cinema_room }}" min="1" required>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $reservation->name }}" required>
            </div>

            <div class="mb-3">
                <label for="contact_number" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" name="contact_number" value="{{ $reservation->contact_number }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" value="{{ $reservation->email }}" required>
            </div>

            <div class="mb-3">
                <label for="payment_method" class="form-label">Payment Method</label>
                <select class="form-select" name="payment_method" required>
                    <option value="online" {{ $reservation->payment_method == 'online' ? 'selected' : '' }}>Online Payment</option>
                    <option value="counter" {{ $reservation->payment_method == 'counter' ? 'selected' : '' }}>Counter Payment</option>
                </select>
            </div>

            <button type="submit" class="btn btn-dark">Save Changes</button>
            <a href="{{ route('reservations.reservation') }}" class="btn btn-light">Cancel</a>
        </form>
    </div>

</body>

</html>
