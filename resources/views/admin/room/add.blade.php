@extends('templates.layout')
@section('content')
    <form action="{{ route('handleAdd-room') }}" class="form-inline" method="POST" enctype="multipart/form-data">
        @csrf
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        @error('status_room')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="">Status</label>
            <input type="text" class="form-control" name="status_room">
        </div>

        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price">
        </div>

        @error('roomType_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="">Room ID</label>
        <select name="roomType_id" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            @foreach ($room_type as $rt )
                <option value="{{ $rt->id }}">{{ $rt->id }}</option>
            @endforeach
        </select>

        @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address">
        </div>

        @error('id_image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="">Image ID</label>
        <select name="id_image" id="inlineFormCustomSelectPref">
            <option selected>Choose...</option>
            @foreach ($image as $img )
                <option value="{{ $img->id }}">{{ $img->id }}</option>
            @endforeach
        </select>

        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
@endsection
