@extends('layout')
@section('content')
    <div class="container">
        <h1 align="center">My images</h1>
        <div class="row">
            @foreach($images as $image)
                <div class="col-md-3 image-item">
                    <img src="/{{$image->image}}" class="img-thumbnail" alt="image">
                    <a href="/showImage/{{$image->id}}" class="btn btn-info my-button">View</a>
                    <a href="/editImage/{{$image->id}}" class="btn btn-warning my-button">Edit</a>
                    <a href="/deleteImage/{{$image->id}}" onclick="return confirm('Вы уверены?')" class="btn btn-danger my-button">Delete</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
