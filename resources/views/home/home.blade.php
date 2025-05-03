@extends('template.main')

@section('content')

    <head>

        <style>

            .body {
                font-family: 'Teachers', sans-serif;
                font-size: large;
            }

            .left {
                margin-left: 30px;
            }

            .first {
                width: 1200px;
                height: 400px;
                margin-left: 50px;
                margin-top: 15px;
            }

            .second {
                width: 1200px;
                height: 300px;
                margin-left: 50px;
                margin-top: 15px;
            }

            .third {
                width: 500px;
                height: 300px;
                margin-left: 1300px;
                margin-top: 15px;
            }

        </style>


    </head>

    <body style = "font-family: 'Teachers', sans-serif">

        <h1 style = "margin-left: 60px; margin-top: 20px"> Now Showing </h1>

        <div class="card first mb-4">
           
        </div>

        <h1 style = "margin-left: 60px;"> Coming Soon </h1>

        <div class = "card second">
            Hello World Again
        </div>


    </body>

    </html>
@endsection
