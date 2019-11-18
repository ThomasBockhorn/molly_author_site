@extends('layouts/app')

@section('content')

<!--main Banner-->
@include('sections/banner/mainBanner')

<!--book preview-->
@include('sections/bookPreview/bookPreview')

<!--reviews-->
@include('sections/reviews/reviews')

<!--reviews2-->
@include('sections/reviews/reviews2')

<!-- About Author -->
@include('sections/author/author')

<!-- Others books -->
@include('sections/additionalBooks/additionalBooks')

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
