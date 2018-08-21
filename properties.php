<?php
require 'repos/header.php';
include 'repos/connect.php';

?>

    <?php
        // require 'repos/search.php';
    ?>
    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-50">
        <div class="container">
        <br><br><br><br>

            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                    <h2>Available Properties</h2>
                    <p>Own your Plot. Before it is too Late.</p>
                    </div>
                </div>
            </div>
    
            <div class="row">

                <!-- Single Featured Property -->
                <?php
                $sql = "SELECT * FROM PROPERTIES WHERE status='On Sale' ORDER BY created_date DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                ?>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img style= "height:100%; width:100%;" src="<?= "".$row["image"].""; ?>" alt="">

                            <div class="tag">
                            <span><?= "".$row["status"].""; ?></span>
                            </div>
                            <div class="list-price">
                                <p>Ksh. <?= "".$row["price"].""; ?></p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><?= "".$row["name"].""; ?></h5>
                            <p class="location"><img src="img/icons/location.png" alt=""><?= "".$row["location"].""; ?></p>
                            <p><?= "".$row["description"].""; ?>.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="img/icons/new.png" alt="">
                                </div>
                                <div class="space">
                                    <img src="img/icons/space.png" alt="">
                                    <span><?= "".$row["size"].""; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?> 
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a developed land</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">You just found us, and we offer free transport to view our plots from our offices.</h6>
                        <a href="contact.php" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Inquiries >></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Client testimonials</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Friendly Staff</h5>
                            <p>Hi! I would like to appreciate the way you serve your clients. I really enjoyed being your client because of the amazing service i received from you.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/team2.jpg" alt="">
                                <p>Marry Wairimu, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Land/Plot for me</h5>
                            <p>Hi! I would like to appreciate the way you serve your clients. I really enjoyed being your client because of the amazing service i received from you.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/team1.jpg" alt="">
                                <p>Simon Waweru, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Land/Plot for me</h5>
                            <p>Hi! I would like to appreciate the way you serve your clients. I really enjoyed being your client because of the amazing service i received from you.</p>

                            <div class="testimonial-author-info">
                                <img src="img/bg-img/team3.jpg" alt="">
                                <p>Brian Omondi, <span>Customer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->

    

</body>
<?php 
    include 'repos/footer.php';
?>
</html>