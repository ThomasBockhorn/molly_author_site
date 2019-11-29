@if(count($events) > 0)
    <section class="section border-bottom" id="events">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                   <div class="section-heading text-center">
                        <h2 class="mb-2 text-lg">Events</h2>
                        <p>Patterson and I love school and library visits! Email me to set up an in-person or Skype/FaceTime reading.</p>
                   </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    @foreach($events as $event)
                    <?php
                        $stringToDate = strtotime($event->event_date);
                        $newDate = date('Y/m/d', $stringToDate);
                    ?>
                    <div class="jumbotron jumbotron-fluid d-flex flex-row p-0">
                        <time class="text-nowrap" datetime="{{$newDate}}" class="col-3">
                            <span class="day"><?php echo(date('d', $stringToDate)) ?></span>
                            <span class="month"><?php echo(date('F', $stringToDate)) ?></span>
                            <span class="year"><?php echo(date('Y', $stringToDate)) ?></span>
                            <span class="time">{{$event->event_time}}</span>
                        </time>
                        <div class="col-9">
                            <h5>{{$event->event_title}}</h5>
                            <p>
                                {{$event->description}}
                            </p>
                            <p>
                                {{$event->location}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
