@extends('templates.layout')
@section('content')
<form action="{{ route('handleEdit-roomtype',['id'=>$room_type->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="">Name</label>
    <input class="form-control" type="text" name="name" value="{{ $room_type->name }}">
    <label for="">Số lượng người</label>
    <input class="form-control" type="text" name="quantity_people" value="{{ $room_type->quantity_people }}">
    <label for="">Số lượng giường</label>
    <input class="form-control" type="text" name="quantity_bed" value="{{ $room_type->quantity_bed }}">
    <button type="submit" class="btn btn-primary mb-2">Submit</button>
</form>
@endsection
