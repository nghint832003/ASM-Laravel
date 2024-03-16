@extends('templates.layout')
@section('content')
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Image 1</th>
            <th scope="col">Image 2</th>
            <th scope="col">Image 3</th>
            <th scope="col">Image 4</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach($image as $img)
            <tr>
                <th>{{ $img->id }}</th>
                <th><img src="{{ $img->img1?''.asset('uploads/'. $img->img1):'' }}" width="100px" alt=""></th>
                <th><img src="{{ $img->img2?''.asset('uploads/'. $img->img2):'' }}"width="100px"></th>
                <th><img src="{{ $img->img3?''.asset('uploads/'. $img->img3):'' }}" width="100px" alt=""></th>
                <th><img src="{{ $img->img4?''.asset('uploads/'. $img->img4):'' }}" width="100px" alt=""></th>
                <th>
                    <button class="btn btn-success"><a href="{{ route('add-image') }}">Add</a></button>
                    <button class="btn btn-warning"><a href="{{ route('edit-image',['id'=>$img->id]) }}">Edit</a></button>
                    <button class="btn btn-danger"><a href="{{ route('delete-image',['id'=>$img->id]) }}">Delete</a></button>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
