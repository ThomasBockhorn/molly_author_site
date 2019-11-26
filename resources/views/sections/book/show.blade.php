@extends('layouts/backend')

@section('content')
<div class="container">
    <h1>{{$oneBook->title}}</h1>
    <h3>{{$oneBook->author}}</h3>
    <hr>
    <p>
        {{$oneBook->description}}
    </p>
    <hr>
    <div class="d-flex align-items-start flex-column" style="height: 200px;">
        <a href="{{ route('book.edit', $oneBook->id)}}" class="btn btn-info m-2">Edit</a>
        <a href="{{ route('book.index')}}" class="btn btn-primary m-2">Back</a>
    </div>
</div>
@endsection
