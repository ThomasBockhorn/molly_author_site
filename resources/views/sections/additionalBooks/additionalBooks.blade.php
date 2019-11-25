<section class="section-bottom others-book" id="additionalBooks">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="pb-4">
					<h2>Others Books by Me</h2>
				</div>
			</div>
		</div>
        <div class="justify-content-center col-lg-12 d-flex">
            @foreach($books as $book)
                <div class="">
                    <div class="card m-5" style="width: 15rem;">
                        <a href="#">
                            <img src="{{ asset('/images/bookFront.jpg')}}" alt="" class="card-img-top">
                            <i class="ti-link"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
	</div>
</section>
