@extends('layouts/backend')

@section('content')
<div class="container mb-2">
        <h1>Add an Event</h1>
        <hr>
        <form method='POST' action="{{ route('events.store') }}" enctype="multipart/form-data">
            @csrf
            <label for="event_title">Event Title:</label>
            <input type="text" name="event_title" id="event_title" class="form-control" required>
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" class="form-control"  required>
            <label for="event_date">Event Date:</label>
            <input type="text" name="event_date" id="event_date" class="form-control" required>
            <label for="event_time">Event Time:</label>
            <input type="text" name="event_time" id="event_time" class="form-control" required>
            <label for="description">More Information:</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10" required>
            </textarea>
            <label for="image">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <br>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>

@endsection
