<?php $head_title="Contact || NoorTravelsGH.com"?>
<?php require_once('parts/layout/top-layout.php'); ?>

<!-- Header -->
<?php require_once('parts/header/header3.php'); ?>

<?php
$page_title = "Contact";
require_once('parts/page-title.php');
?>

<!--====== Start Info Section ======-->
<section class="contact-info-section pt-100 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title text-center mb-45 wow fadeInDown">
                    <span class="sub-title">Contact Noor Travels</span>
                    <h2>
                        Need Visa Assistance or Travel Booking?
                        We’re Ready to Help You.
                    </h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <!-- Office Location -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact-info-item text-center mb-40 wow fadeInUp">
                    <div class="icon">
                        <img src="assets/images/icon/icon-1.png" alt="Location Icon">
                    </div>
                    <div class="info">
                        <span class="title">Office Location</span>
                        <p>
                            Accra, Ghana<br>
                          
                        </p>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact-info-item text-center mb-40 wow fadeInDown">
                    <div class="icon">
                        <img src="assets/images/icon/icon-2.png" alt="Email Icon">
                    </div>
                    <div class="info">
                        <span class="title">Email Address</span>
                        <p>
                            <a href="mailto:info@noortravelsgh.com">
                                info@noortravelsgh.com
                            </a>
                        </p>
                        <p>
                            <a href="mailto:support@noortravelsgh.com">
                                support@noortravelsgh.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Hotline -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="contact-info-item text-center mb-40 wow fadeInUp">
                    <div class="icon">
                        <img src="assets/images/icon/icon-3.png" alt="Phone Icon">
                    </div>
                    <div class="info">
                        <span class="title">Hotline</span>
                        <p><a href="tel:+233000000000">+233 000 000 000</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====== End Info Section ======-->


<!--====== Start Contact Map Section ======-->
<section class="contact-page-map pb-100 wow fadeInUp">
    <div class="map-box">
        <iframe 
            src="https://maps.google.com/maps?q=Accra%20Ghana&t=&z=13&ie=UTF8&iwloc=&output=embed"
            allowfullscreen>
        </iframe>
    </div>
</section>
<!--====== End Contact Map Section ======-->


<!--====== Start Contact Section ======-->
<section class="contact-section pb-100">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center mb-50 wow fadeInDown">
                    <span class="sub-title">Get In Touch</span>
                    <h2>Send Us a Message</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-area wow fadeInUp">

                    <form class="contact-form" method="post" action="#">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text"
                                           placeholder="Full Name"
                                           class="form_control"
                                           name="name"
                                           required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text"
                                           placeholder="Phone Number"
                                           class="form_control"
                                           name="number"
                                           required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="email"
                                           placeholder="Email Address"
                                           class="form_control"
                                           name="email"
                                           required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form_group">
                                    <input type="text"
                                           placeholder="Destination / Visa Type"
                                           class="form_control"
                                           name="service"
                                           required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form_group">
                                    <textarea name="message"
                                              placeholder="Tell us how we can assist you..."
                                              class="form_control"
                                              rows="6"
                                              required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form_group text-center">
                                    <button class="main-btn primary-btn">
                                        Send Message
                                        <i class="fas fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
</section>
<!--====== End Contact Section ======-->


<!--====== Start Gallery Section ======-->
<section class="gallery-section mbm-150">
    <div class="container-fluid">
        <div class="slider-active-5-item wow fadeInUp">

            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="assets/images/gallery/tour-pic.jpg" alt="Travel Image">
                    <div class="hover-overlay">
                        <a href="assets/images/gallery/tour-pic.jpg"
                           class="icon-btn img-popup">
                           <i class="far fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="assets/images/gallery/land-scene.jpg" alt="Travel Image">
                    <div class="hover-overlay">
                        <a href="assets/images/gallery/land-scene.jpg"
                           class="icon-btn img-popup">
                           <i class="far fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="assets/images/gallery/group-pic.jpg" alt="Travel Image">
                    <div class="hover-overlay">
                        <a href="assets/images/gallery/group-pic.jpg"
                           class="icon-btn img-popup">
                           <i class="far fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Duplicate slides to maintain slider -->
            <div class="single-gallery-item">
                <div class="gallery-img">
                    <img src="assets/images/gallery/tour-pic.jpg" alt="Travel Image">
                    <div class="hover-overlay">
                        <a href="assets/images/gallery/tour-pic.jpg"
                           class="icon-btn img-popup">
                           <i class="far fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====== End Gallery Section ======-->

<?php require_once('parts/footer/footer3.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>
