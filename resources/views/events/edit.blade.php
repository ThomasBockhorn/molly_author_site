@extends('layouts/backend')

@section('content')
<div class="container mb-2">
        <h1>Edit an Event</h1>
        <hr>
        <form method='POST' action="{{ route('events.update', $oneEvent->id) }}" enctype="multipart/form-data">
            {{csrf_field()}}
            @method('PUT')
            <label for="event_title">Event Title:</label>
            <input type="text" name="event_title" id="event_title" class="form-control" required value="{{$oneEvent->event_title}}">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" class="form-control"  required value="{{$oneEvent->location}}">
            <label for="event_date">Event Date:</label>
            <input type="text" name="event_date" id="event_date" class="form-control" required value="{{$oneEvent->event_date}}">
            <label for="event_time">Event Time:</label>
            <input type="text" name="event_time" id="event_time" class="form-control" required value="{{$oneEvent->event_time}}">
            <label for="description">More Information:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>{{$oneEvent->description}}
            </textarea>
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <br>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

@endsection

