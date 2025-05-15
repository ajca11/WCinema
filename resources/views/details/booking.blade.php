@extends('template.main')

@section('content')

<head>
    <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
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

        .text-danger {
            font-size: 0.875rem;
            color: #dc3545;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Confirm Your Reservation</h1>

        <form method="POST" action="{{ route('reservation.store') }}">
            @csrf
            <div class="row mt-5">
                <div class="col-md-6">

                    <div class="mb-4">
                        <label>Movie</label>
                        <select class="form-control" name="movie_id" required>
                            <option value="">Select Movie</option>
                            @foreach ($movies as $movie)
                                <option value="{{ $movie->id }}" {{ old('movie_id') == $movie->id ? 'selected' : '' }}>{{ $movie->title }}</option>
                            @endforeach
                        </select>
                        @error('movie_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Time Slot</label>
                        <select class="form-control" name="time_slot" required>
                            <option value="">Select Time</option>
                            @foreach ($movies as $movie)
                                @foreach (explode(',', $movie->time_slots) as $slot)
                                    <option value="{{ $slot }}" {{ old('time_slot') == $slot ? 'selected' : '' }}>{{ $slot }} ({{ $movie->title }})</option>
                                @endforeach
                            @endforeach
                        </select>
                        @error('time_slot')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Tickets</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-light" onclick="updateTicketCount(-1)">-</button>
                            <input type="text" class="form-control text-center" name="tickets" id="ticketCount" value="{{ old('tickets', 1) }}" readonly>
                            <button type="button" class="btn btn-light" onclick="updateTicketCount(1)">+</button>
                        </div>
                        <small class="form-text text-muted">Maximum of 3 tickets.</small>
                        @error('tickets')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Cinema Room</label>
                        <select class="form-control" name="cinema_room" required>
                            <option value="">Select Room</option>
                            @foreach ($movies as $movie)
                                <option value="{{ $movie->cinema_room }}" {{ old('cinema_room') == $movie->cinema_room ? 'selected' : '' }}>Room {{ $movie->cinema_room }} ({{ $movie->title }})</option>
                            @endforeach
                        </select>
                        @error('cinema_room')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">

                    <div class="mb-4">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" name="contact_number" placeholder="e.g. 09123456789" value="{{ old('contact_number') }}" required>
                        @error('contact_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="you@example.com" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="paymentMethod">Payment Method</label>
                        <select class="form-control" id="paymentMethod" name="payment_method" required>
                            <option value="" disabled selected>Select Payment</option>
                            <option value="online" {{ old('payment_method') == 'online' ? 'selected' : '' }}>Online Payment</option>
                            <option value="counter" {{ old('payment_method') == 'counter' ? 'selected' : '' }}>Over the Counter</option>
                        </select>
                        @error('payment_method')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-submit"><a href = "/confirmation" style = "color: White"> Submit </a></button>
            </div>
        </form>
    </div>

    <script>
        function updateTicketCount(change) {
            const input = document.getElementById('ticketCount');
            let current = parseInt(input.value);
            let newValue = current + change;
            if (newValue >= 1 && newValue <= 3) {
                input.value = newValue;
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

@endsection
