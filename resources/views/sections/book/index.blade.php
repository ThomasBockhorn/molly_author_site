@extends('layouts/backend')

@section('content')
<div class="container">
        <h1>Recent Books</h1>
        <hr>
        @foreach($books as $book)
            <div class="jumbotron">
                <h3>{{$book->title}}</h3>
                <hr>
                <p>
                    {{str_limit($book->description, $limit = 50, $end = '...') }}
                </p>
                <div>
                    <a href="{{ route('book.show', $book->id)}}" class="btn btn-info">Further Info</a>

                    <form action="{{url('book/index', [$book->id])}}" method="POST">
                        <br>
                       @csrf
                       @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </div>
            </div>
        @endforeach
    </div>

@endsection
