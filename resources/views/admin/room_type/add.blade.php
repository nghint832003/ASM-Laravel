@extends('templates.layout')
@section('content')
    <form class="form-inline" action="{{ route('handleAdd-roomtype') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name">
        </div>

        @error('quantity_people')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="">Số lượng người</label>
            <input class="form-control" type="text" name="quantity_people">
        </div>

        @error('quantity_bed')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="">Số lượng giường</label>
            <input class="form-control" type="text" name="quantity_bed">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
@endsection
