@extends('templates.layout')
@section('content')
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity Bed</th>
            <th scope="col">Quantity People</th>
            <th scope="col">Action</th>

        </thead>
        <tbody>
            @foreach($roomType as $rt)
            <tr>
                <th>{{ $rt->id }}</th>
                <th>{{ $rt->name }}</th>
                <th>{{ $rt->quantity_people }}</th>
                <th>{{ $rt->quantity_bed }}</th>
                <th>
                    <button class="btn btn-success"><a href="{{ route('add-roomtype') }}">Add</a></button>
                    <button class="btn btn-warning"><a href="{{ route('edit-roomtype',['id'=>$rt->id]) }}">Edit</a></button>
                    <button class="btn btn-danger"><a href="{{ route('delete-roomtype',['id'=>$rt->id]) }}">Delete</a></button>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
