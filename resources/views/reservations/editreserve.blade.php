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

        <form>
            <div class="mb-3">
                <label for="movie" class="form-label">Movie</label>
                <input type="text" class="form-control" id="movie" value="Frozen">
            </div>

            <div class="mb-3">
                <label for="timeSlot" class="form-label">Time Slot</label>
                <input type="time" class="form-control" id="timeSlot" value="12:00">
            </div>

            <div class="mb-3">
                <label for="tickets" class="form-label">Tickets</label>
                <input type="number" class="form-control" id="tickets" value="2" min="1">
            </div>

            <div class="mb-3">
                <label for="cinemaRoom" class="form-label">Cinema Room</label>
                <input type="number" class="form-control" id="cinemaRoom" value="1" min="1">
            </div>

            <div class="mb-3">
                <label for="fullName" class="form-label">Name</label>
                <input type="text" class="form-control" id="fullName" value="Cappucina Ballerina">
            </div>

            <div class="mb-3">
                <label for="contact" class="form-label">Contact Number</label>
                <input type="tel" class="form-control" id="contact" value="09632184218">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" value="capballrina@gmail.con">
            </div>

            <div class="mb-3">
                <label for="payment" class="form-label">Payment Method</label>
                <select class="form-select" id="payment">
                    <option selected>Online Payment</option>
                    <option>Cash</option>
                    <option>Credit Card</option>
                </select>
            </div>

            <button type="submit" class="btn btn-dark">Save Changes</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </form>
    </div>

</body>

</html>
