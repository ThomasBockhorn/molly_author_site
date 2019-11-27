<section class="section border-bottom" id="events">
        @if(count($events) > 0)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                   <div class="section-heading text-center">
                        <h2 class="mb-2 text-lg">Events</h2>
                        <p>Come to our events and see me and Patterson!</p>
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
                        <time datetime="{{$newDate}}" class="col-3">
                            <span class="day"><?php echo(date('d', $stringToDate)) ?></span>
                            <span class="month"><?php echo(date('F', $stringToDate)) ?></span>
                            <span class="year"><?php echo(date('Y', $stringToDate)) ?></span>
                            <span class="time">{{$event->event_time}}</span>
                        </time>
                        <div class="col-9">
                            <p>
                                {{$event->description}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </section>
