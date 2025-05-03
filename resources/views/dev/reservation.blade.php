<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link href="https://fonts.googleapis.com/css2?family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
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
      max-width: 1500px;
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

    .btn{
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

    <h2>Reservations</h2>

    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Movie</th>
            <th scope="col">Time Slot</th>
            <th scope="col">Tickets</th>
            <th scope="col">Cinema Room</th>
            <th scope="col">Name</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Email</th>
            <th scope="col">Payment Method</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tbody>

          <tr>
            <th scope="row">1</th>
            <td>Frozen</td>
            <td>12:00</td>
            <td>2</td>
            <td>1</td>
            <td>Cappucina Ballerina</td>
            <td>09632184218</td>
            <td>capballrina@gmail.con</td>
            <td>Online Payment</td>
            <td>
                <div class = "btn btn-light"> Edit </div>
                <div class = "btn btn-dark"> Delete </div>
            </td>
          </tr>

          <tr>
            <th scope="row">2</th>
            <td>Frozen</td>
            <td>15:00</td>
            <td>1</td>
            <td>1</td>
            <td>Bombardino Crocodillo</td>
            <td>09391246712</td>
            <td>bcroc@gmail.con</td>
            <td>Online Payment</td>
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
