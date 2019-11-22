@extends('layouts/backend')

@section('content')
<div class="container mb-2">
        <h1>Add a Book</h1>
        <hr>
        <form method='POST' action="{{ route('book.store') }}" enctype="multipart/form-data">
            {{csrf_field()}}
            <label for="title">Book Title:</label>
            <input type="text" name="title" id="title" class="form-control">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" class="form-control">
            <label for="description">More Information:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <br>
            <input type="submit" value="Submit Project" class="btn btn-primary">
        </form>
    </div>

@endsection
