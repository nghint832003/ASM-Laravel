@extends('templates.layout')
@section('content')
    <form action="{{ route('handleEdit-image',['id'=>$image->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">Image 1</label>
            <input type="file" class="form-control" name="img1" value="{{ $image->img1 }}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Image 2</label>
            <input type="file" class="form-control" name="img2" value="{{ $image->img2 }}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Image 3</label>
            <input type="file" class="form-control" name="img3" value="{{ $image->img3 }}">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Image 4</label>
            <input type="file" class="form-control" name="img4" value="{{ $image->img4 }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
