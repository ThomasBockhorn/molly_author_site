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

<!-- Events -->
@include('sections/events/events')

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
