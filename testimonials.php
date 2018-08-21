<?php
require 'repos/header.php';
?>
    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">Testimonials</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <section class="south-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-heading">
                        <h6>Testimonial form</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-6">
                    <div class="contact-form">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="text" id="contact-name" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="number" id="contact-number" placeholder="Your Phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="contact-email" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Your Testimony"></textarea>
                            </div>
                            <button type="submit" class="btn south-btn">Send Testimonial</button>
                        </form>
                    </div>
                </div>
                <!-- Testimonial right -->
                <div class="col-12 col-lg-6">
                    <!-- <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h5>Client testimonials</h5>
                        <p>These are comments from happy clients.</p>
                    </div> -->
                <div class="card" style="width: 100%;">
                <div class="card-body">
                   <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide text-center">
                        <h5>Friendly Staff</h5>
                        <p>Hi! I would like to appreciate the way you serve your clients. I really enjoyed being your client because of the amazing service i received from you.</p>

                        <div class="testimonial-author-info">
                            <img  class="rounded-circle" style="height:75px; width:75px;" src="img/bg-img/team2.jpg" alt="">
                            <p>Marry Wairimu, <span>Customer</span></p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="card-body">
                   <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide text-center">
                        <h5>Perfect Land/Plot for me</h5>
                        <p>Hi! I would like to appreciate the way you serve your clients. I really enjoyed being your client because of the amazing service i received from you.</p>

                        <div class="testimonial-author-info">
                            <img class="rounded-circle" style="height:75px; width:75px;"  src="img/bg-img/team1.jpg" alt="">
                            <p>Simon Waweru, <span>Customer</span></p>
                        </div>   
                    </div>
                </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="card-body">
                   <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide text-center">
                        <h5>Perfect Land/Plot for me</h5>
                        <p>Hi! I would like to appreciate the way you serve your clients. I really enjoyed being your client because of the amazing service i received from you.</p>
                        <div class="testimonial-author-info">
                            <img  class="rounded-circle" style="height:75px; width:75px;" src="img/bg-img/team3.jpg" alt="">
                            <p>Brian Omondi, <span>Customer</span></p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="card" style="width: 100%;">
                <div class="card-body">
                   <!-- Single Testimonial Slide -->
                    <div class="single-testimonial-slide text-center">
                        <h5>Friendly Staff</h5>
                        <p>Hi! I would like to appreciate the way you serve your clients. I really enjoyed being your client because of the amazing service i received from you.</p>

                        <div class="testimonial-author-info">
                            <img  class="rounded-circle" style="height:75px; width:75px;" src="img/bg-img/team2.jpg" alt="">
                            <p>Marry Wairimu, <span>Customer</span></p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="googleMap" class="googleMap"></div>
                </div>
            </div>
        </div>
    </div>
    </body>
<?php 
    include 'repos/footer.php';
?>
</html>