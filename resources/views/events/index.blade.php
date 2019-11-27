@extends('layouts/backend')

@section('content')
<div class="container">
        <h1>Recent Events</h1>
        <hr>
        @foreach($events as $event)
            <div class="jumbotron">
                <h3>{{$event->event_title}}</h3>
                <hr>
                <p>
                    {{str_limit($event->description, $limit = 50, $end = '...') }}
                </p>
                <div>
                    <a href="{{ route('events.show', $event->id)}}" class="btn btn-info">Further Info</a>

                    <form action="{{url('events', [$event->id])}}" method="POST">
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

