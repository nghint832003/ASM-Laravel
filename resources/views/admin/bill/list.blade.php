@extends('templates.layout')
@section('content')
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Customer ID</th>
            <th scope="col">Room ID</th>
            <th scope="col">Booking</th>
            <th scope="col">Check out</th>
        </thead>
        <tbody>
            @foreach($bill as $b)
                <tr>
                    <th>{{ $b->id }}</th>
                    <th>{{ $b->customer_id }}</th>
                    <th>{{ $b->room_id }}</th>
                    <th>{{ $b->booking_date }}</th>
                    <th>{{ $b->checkOut_date }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
