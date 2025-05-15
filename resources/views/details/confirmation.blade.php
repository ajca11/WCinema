@extends('template.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reservation Confirmation') }}</div>

                <div class="card-body">
                    <div class="alert alert-success">
                        Your reservation has been confirmed!
                    </div>

                    <div class="reservation-details">
                        <h4>Reservation Details:</h4>
                        <table class="table">
                            <tr>
                                <th>Movie:</th>
                                <td>{{ $reservation['movie_title'] }}</td>
                            </tr>
                            <tr>
                                <th>Time Slot:</th>
                                <td>{{ $reservation['time_slot'] }}</td>
                            </tr>
                            <tr>
                                <th>Number of Tickets:</th>
                                <td>{{ $reservation['tickets'] }}</td>
                            </tr>
                            <tr>
                                <th>Cinema Room:</th>
                                <td>{{ $reservation['cinema_room'] }}</td>
                            </tr>
                            <tr>
                                <th>Name:</th>
                                <td>{{ $reservation['name'] }}</td>
                            </tr>
                            <tr>
                                <th>Contact Number:</th>
                                <td>{{ $reservation['contact_number'] }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $reservation['email'] }}</td>
                            </tr>
                            <tr>
                                <th>Payment Method:</th>
                                <td>{{ $reservation['payment_method'] }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('home') }}" class="btn btn-primary">Return to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
