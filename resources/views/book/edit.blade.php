@extends('layouts/backend')

@section('content')
<div class="container mb-2">
        <h1>Add a Book</h1>
        <hr>
        <form method='POST' action="{{ route('book.update', $oneBook->id) }}" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('PUT')
            <label for="title">Book Title:</label>
            <input type="text" name="title" id="title" class="form-control" required value="{{$oneBook->title}}">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" class="form-control" required value="{{$oneBook->author}}">
            <input type="hidden" name="author_id" id="author_id" value="1">
            <label for="description">More Information:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>{{$oneBook->description}}</textarea>
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <br>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

@endsection
