@extends('layouts/backend')

@section('content')
<div class="container">
    <h1>{{$oneEvent->event_title}}</h1>
    <h3>{{$oneEvent->location}}</h3>
    <h3>{{$oneEvent->event_date}}</h3>
    <h3>{{$oneEvent->event_time}}</h3>
    <hr>
    <p>
        {{$oneEvent->description}}
    </p>
    <hr>
    <div class="d-flex align-items-start flex-column" style="height: 200px;">
        <a href="{{ route('events.edit', $oneEvent->id)}}" class="btn btn-info m-2">Edit</a>
        <a href="{{ route('events.index')}}" class="btn btn-primary m-2">Back</a>
    </div>
</div>
@endsection
