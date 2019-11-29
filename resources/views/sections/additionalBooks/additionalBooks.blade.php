@if(count($books) > 0)
<section class="section-bottom others-book" id="additionalBooks">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
                <div class="pb-4">
					<h2>Others Books by Me</h2>
                </div>
			</div>
        </div>
        <div class="row">
            @foreach($books as $book)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="book-item mb-4 mb-lg-0">
                    <img id="additionalBook" class="img-fluid" src="{{ asset('storage/'. $book->image)}}" alt="{{$book->title}}">
                </div>
            </div>
            @endforeach
        </div>
	</div>
</section>
@endif
