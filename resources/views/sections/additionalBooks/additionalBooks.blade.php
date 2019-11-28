<section class="section-bottom others-book" id="additionalBooks">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
                @if(count($books) > 0)
                <div class="pb-4">
					<h2>Others Books by Me</h2>
                </div>
                @endif
			</div>
		</div>
        <div class="justify-content-center col-lg-12 d-flex">
            @foreach($books as $book)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'. $book->image)}}" alt="{{$book->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <p class="card-text">{{$book->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
	</div>
</section>
