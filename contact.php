<?php include "includes/header.php"; ?>

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><i class="far fa-paper-plane" style="font-size:240px;"></i> Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- Hero Area End -->

<!-- ================ CONTACT SECTION START ================= -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="contact-title">For any query , ask us !</h2>
            <h4 class="text-center bg-info"><?php display_message(); ?></h4>
        </div>

        <div class="col-lg-8">
            <form name="sentMessage" method="post" action="" id="contact" enctype="multipart/form-data">
                <?php send_message(); ?>
                <div class="row">

                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" cols="30" rows="9" placeholder=" Enter message" required data-validation-required-message="Please enter your message"></textarea>
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name" required data-validation-required-message="Please enter your name">
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Enter your email" required data-validation-required-message="Please enter your email">
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter subject" required data-validation-required-message="Please enter your subject">
                        </div>
                    </div>

                    <div class="col-lg-12 text-center">
                        <button name="submit" type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </div>
                <br>
            </form>
        </div>

        <!-- SIDEBAR DISPLAY ITEMS -->
        <div class="col-lg-3 offset-lg-1">

            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>State , Country.</h3>
                    <p>City , Pin-Code</p>
                </div>
            </div>

            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                    <h3>+91 0000 1111 22</h3>
                    <p>Mon to Fri <br> 9:00 AM to 6:00 PM</p>
                </div>
            </div>

            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>support@nAukri.com</h3>
                    <p>Send us your query anytime!</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ================ CONTACT SECTION END ================= -->

<?php include "includes/footer.php"; ?>