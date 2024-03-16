@extends('templates.layout')
@section('content')
    <form action="{{ route('handleAdd-image') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @error('img1')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="" class="form-label">Image 1</label>
            <input type="file" class="form-control" name="img1">
        </div>

        @error('img2')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="" class="form-label">Image 2</label>
            <input type="file" class="form-control" name="img2">
        </div>

        @error('img3')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="" class="form-label">Image 3</label>
            <input type="file" class="form-control" name="img3">
        </div>

        @error('img4')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="" class="form-label">Image 4</label>
            <input type="file" class="form-control" name="img4">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
