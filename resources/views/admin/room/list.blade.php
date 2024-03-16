@extends('templates.layout')
@section('content')
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Price</th>
            <th scope="col">Room Type</th>
            <th scope="col">Address</th>
            <th scope="col">Description</th>
            <th scope="col">ID Image</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach($room as $r)
            <tr>
                <th>{{ $r->id }}</th>
                <th>{{ $r->name }}</th>
                <th>{{ $r->status_room }}</th>
                <th>{{ $r->price }}</th>
                <th>{{ $r->roomType_id }}</th>
                <th>{{ $r->address }}</th>
                <th>{{ $r->description }}</th>
                <th>{{ $r->id_image }}</th>
                <th>
                    <button class="btn btn-success"><a href="{{ route('add-room') }}">Add</a></button>
                    <button class="btn btn-warning"><a href="{{ route('edit-room',['id'=>$r->id]) }}">Edit</a></button>
                    <button class="btn btn-danger"><a href="{{ route('delete-room',['id'=>$r->id]) }}">Delete</a></button>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
