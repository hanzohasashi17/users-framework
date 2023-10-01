@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Edit Image</h1>
                <div class="image-item">
                    <img src="/{{$image->image}}" alt="qwe" class="img-thumbnail">
                </div>
                <form action="/updateImage/{{$image->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-control">
                        <input type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
