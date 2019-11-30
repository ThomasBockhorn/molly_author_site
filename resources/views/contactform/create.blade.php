<section class="section contact " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                   <div class="section-heading">
                        <h2 class="mb-2 text-lg">Contact Me</h2>
                        <p>Patterson and I love school and library visits! Email me to set up an in-person or Skype/FaceTime reading.</p>
                   </div>
                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-7 col-sm-12 pr-5 col-md-8">
                    <form class="contact__form form-row contact-form " method="post" action="/contact" id="contactForm">
                        @csrf
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
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email Address" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="d-lg-flex justify-content-between mt-4">
                                <input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="contact-info-block m-4">
                        <h4 class="mb-2">Email</h4>
                        <p>felder.molly@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
