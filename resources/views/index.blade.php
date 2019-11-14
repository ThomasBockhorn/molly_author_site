@extends('layouts/app')

@section('content')

<!--main Banner-->
@include('sections/banner/mainBanner')

<!--book preview-->
@include('sections/bookPreview/bookPreview')

<section class="service" id="features">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-4 mb-lg-0 bg-grey">
                    <i class="ti-microphone text-danger"></i>
                    <h5 class="mb-3 mt-4">Experience</h5>
                    <p class="mb-0">Must explain to you how this denouncing praisig pain was give you explain to you how…</p>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-4 mb-lg-0 bg-grey">
                    <i class="ti-rocket text-success"></i>
                    <h5 class="mb-3 mt-4">Marketing Goals</h5>
                    <p class="mb-0">Must explain to you how this denouncing praisig pain was give you explain to you how…</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                 <div class="service-block mb-4 mb-lg-0 bg-grey">
                    <i class="ti-email text-warning"></i>
                    <h5 class="mb-3 mt-4">Targetting Vission</h5>
                    <p class="mb-0">Must explain to you how this denouncing praisig pain was give you explain to you how…</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chapter -->
<section class="section chapter" id="chapter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-lg">What's inside the book</h2>
                    <p>Libero atque veniam molestiae ipsa aliquid quam facilis dolore.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Design principles</h4>
                            <p>Tips on scouting the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Visual hierarchy</h4>
                            <p>A full chapter the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>White space</h4>
                           <p>A full chapter the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Typography</h4>
                            <p> A full chapter just about visas. Overview of work visa options, tips on finding recommendations.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>UI design</h4>
                            <p> Making use of events, networking as a designer/developer How to meet the right people.</p>
                        </div>
                    </div>
                     <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Color theory</h4>
                            <p>Understanding how the city works. Best practices for eating out and grocery shopping. </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Call to action -->
<section class="cta-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="cta-content text-center">
					<span>A powerful explantion of design</span>
					<h2 class="text-lg mb-4 mt-3">Don’t miss event of Grand Central Publishing.</h2>
					<a href="#" target="_blank" class="btn btn-main-2 mt-2">
                        Purchase now for <i class="ti-check mr-2 ml-2"></i> $14.99
                  	</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Review-->
<div class="section bg-grey " data-aos="fade-up" id="reviews">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-lg mb-5">Customer Reviews</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center" data-aos="fade-up">
            <div class="col-md-8">
                <div class="owl-carousel home-slider-loop-false owl-theme">
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>&ldquo;A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.&rdquo;</p>
                            <div class="author mt-5">
                                <img src="images/about/person_1.jpg" alt="Image placeholder" class="mb-4">
                                <h4 class="mb-0">Maxim Smith</h4>
                                <p>CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts. Separated they live in
                                Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <div class="author mt-5">
                                <img src="images/about/person_2.jpg" alt="Image placeholder" class="mb-4">
                                <h4 class="mb-0">Geert Green</h4>
                                <p>CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is
                                an almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            <div class="author mt-5">
                                <img src="images/about/person_3.jpg" alt="Image placeholder" class="mb-4">
                                <h4 class="mb-0">Dennis Roman</h4>
                                <p>CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of
                                bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text
                                didn’t listen. She packed her seven versalia, put her initial into the belt and
                                made herself on the way.&rdquo;</p>
                            <div class="author mt-5">
                                <img src="images/about/person_2.jpg" alt="Image placeholder" class="mb-4">
                                <h4 class="mb-0">Geert Green</h4>
                                <p>CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .section -->
<!-- Counter -->
<section class="section counter border-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item d-flex align-items-center mb-5 mb-lg-0">
					<div class="icon">
						<i class="ti-thumb-up"></i>
					</div>
					<div class="content pl-4">
						<span>Copies Sold</span>
						<h2>23,500</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item d-flex align-items-center mb-5 mb-lg-0">
					<div class="icon">
						<i class="ti-check"></i>
					</div>
					<div class="content pl-4">
						<span>Cup Of Coffee</span>
						<h2>53,246</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item d-flex align-items-center mb-5 mb-lg-0">
					<div class="icon">
						<i class="ti-bookmark"></i>
					</div>
					<div class="content pl-4">
						<span>Copies Released</span>
						<h2>32,456</h2>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item d-flex align-items-center mb-5 mb-lg-0">
					<div class="icon">
						<i class="ti-heart"></i>
					</div>
					<div class="content pl-4">
						<span>Happy Readers</span>
						<h2>45,522</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- About Author -->
<section class="about section" id="author">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="images/about/authorimg.jpg" alt="" class="img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="author-info pl-4 mt-5 mt-lg-0">
                    <span>Know More About Author</span>
                    <h2 class="text-lg">Yasin Arafat <span class="text-sm">- Technical Writer</span></h2>

                    <p class="mb-4 mt-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. et inventore dicta quos ducimus, consectetur culpa dolore quisquam ipsum facere, fugiat. Corporis eaque, sint.</p>
                    <img src="images/about/2.png" alt="" class="img-fluid">


                    <div class="follow mt-5">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="mb-3">Follow Me :</span></li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Others books -->
<section class="section-bottom others-book">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="pb-4">
					<h2>Others books by the author</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="book-item mb-4 mb-lg-0">
					<img src="images/about/b-1.jpg" alt="" class="img-fluid">
					<a href="#" class="hover-item">
						<i class="ti-link"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="book-item mb-4 mb-lg-0">
					<img src="images/about/b-2.jpg" alt="" class="img-fluid">
					<a href="#" class="hover-item">
						<i class="ti-link"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="book-item mb-4 mb-lg-0">
					<img src="images/about/b-3.jpg" alt="" class="img-fluid">
					<a href="#" class="hover-item">
						<i class="ti-link"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="book-item mb-4 mb-lg-0">
					<img src="images/about/b-4.jpg" alt="" class="img-fluid">
					<a href="#" class="hover-item">
						<i class="ti-link"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Call to action -->
<section class="section cta-home">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				 <h2 class="text-lg">Start building a landing page that converts to leads.</h2>
			</div>

			<div class="col-lg-6">
				<form action="#">
			 		<div class="form-group">
			 			<input type="text" class="form-control" placeholder="Full Name">
			 		</div>
			 		<div class="form-group">
			 			<input type="text" class="form-control" placeholder="Enter Your email">
			 		</div>

			 		<a href="#" class="btn btn-main-2">Get free trial</a>
			 	</form>

			 	<p class="mt-3 mb-0">* Download link will be emailed to you.</p>
			</div>
		</div>
	</div>
</section>
<section class="section faq border-bottom">
	<div class="container">
		<div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
               <div class="section-heading text-center">
                    <h2 class="mb-2 text-lg">Frequently Asked Questions</h2>
                    <p>Whether you have questions or you would just like to say hello, contact us.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, atque!</p>
               </div>
            </div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			        <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingOne">
			                <h4 class="panel-title ">
			                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-controls="collapseOne">
			                        <i class="more-less ti-plus"></i>
			                        How to contact with Customer Service?
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                <div class="panel-body">
			                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			                </div>
			            </div>
			        </div>

			        <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingTwo">
			                <h4 class="panel-title ">
			                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"  aria-controls="collapseTwo">
			                        <i class="more-less ti-plus"></i>
			                        New update fixed all bug and issues?
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			                <div class="panel-body">
			                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			                </div>
			            </div>
			        </div>

			        <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingThree">
			                <h4 class="panel-title ">
			                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"  aria-controls="collapseThree">
			                        <i class="more-less ti-plus"></i>
			                        Website reponse taking time, how to improve?
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			                <div class="panel-body">
			                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingFour">
			                <h4 class="panel-title ">
			                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-controls="collapseFour">
			                        <i class="more-less ti-plus"></i>
			                        How to purchase the book online?
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			                <div class="panel-body">
			                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			                </div>
			            </div>
			        </div>

			    </div><!-- panel-group -->

			    <div class="mt-5 text-center">
			    	<a href="#" class="btn btn-main-2">Get it now on amazon</a>
			    </div>
			</div>
		</div>
	</div>
</section>
<!-- Cpntact -->
<section class="section contact " id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
               <div class="section-heading">
                    <h2 class="mb-2 text-lg">Contact Author</h2>
                    <p>Whether you have questions or you would just like to say hello, contact us.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, atque!</p>
               </div>
            </div>
        </div> <!-- / .row -->

        <div class="row">
            <div class="col-lg-7 col-sm-12 pr-5 col-md-8">
                <form class="contact__form form-row contact-form " method="post" action="mail.php" id="contactForm">
                     <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="d-lg-flex justify-content-between mt-4">
                            <p>* Rest assured.We will not spam at your inbox.</p>
                            <input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 col-sm-12 col-md-4">
                <div class="contact-info-block mb-4 mt-5 mt-lg-0 mt-md-0">
                    <h4 class="mb-2">Contact</h4>
                    <p>+ 301 324 9131 </p>
                </div>

                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Email</h4>
                    <p>startor@support.com</p>
                </div>

                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Location</h4>
                    <p>3125 Flanigan Oaks Drive
                    Capitol Heights, MD 20027</p>
                </div>
            </div>
        </div>
    </div>
</section>



 <footer class="footer bg-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="footer-copy text-white-50 mb-0">
                    &copy; Copyright <span class="current-year">Dreambuzz</span> All rights reserved-2019.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="footer-btm-menu text-lg-right mt-3 mt-lg-0">
                    <img src="images/about/cards-3.png" alt="" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div>
</footer>



<!--  Page Scroll to Top  -->

<a class="scroll-to-top smoth-scroll" href="#top-header">
    <i class="ti-angle-up"></i>
</a>
@endsection
