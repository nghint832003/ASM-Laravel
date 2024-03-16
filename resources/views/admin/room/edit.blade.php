@extends('templates.layout')
@section('content')
    <form action="{{ route('handleEdit-room',['id'=>$room->id]) }}" class="form-inline" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $room->name }}">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" class="form-control" name="status_room" value="{{ $room->status_room }}">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price" value="{{ $room->price }}">
        </div>
        <label for="">RoomType ID</label>
        <select name="roomType_id" id="inlineFormCustomSelectPref">
            <option selected value="{{ $room->roomType_id }}">Choose...</option>
            @foreach ($room_type as $rt )
                <option value="{{ $rt->id }}">{{ $rt->id }}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" value="{{ $room->address }}">
        </div>
        <label for="">Image ID</label>
        <select name="id_image" id="inlineFormCustomSelectPref">
            <option selected value="{{ $room->id_image }}">Choose...</option>
            @foreach ($image as $img )
                <option value="{{ $img->id }}">{{ $img->id }}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" value="{{ $room->description }}">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
@endsection
