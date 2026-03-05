<?php $head_title="Tour Details || NoorTravels"; ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header3.php'); ?>

<?php
require_once("tours-data.php");

$key = $_GET['tour'] ?? 'kakum';

if(!isset($tours[$key])){
    $key = "kakum";
}

$tour = $tours[$key];
?>

<!--====== Start Place Details Section ======-->
<section class="place-details-section">

    <!--=== Place Slider ===-->
    <div class="place-slider-area overflow-hidden wow fadeInUp">
        <div class="place-slider">
            <div class="place-slider-item">
                <div class="place-img">
                    <img src="<?php echo $tour['image1']; ?>" alt="">
                </div>
            </div>
            <div class="place-slider-item">
                <div class="place-img">
                    <img src="<?php echo $tour['image2']; ?>" alt="">
                </div>
            </div>
            <div class="place-slider-item">
                <div class="place-img">
                    <img src="<?php echo $tour['image3']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="#-wrapper pt-80">

            <!--=== Tour Title Wrapper ===-->
            <div class="tour-title-wrapper pb-30 wow fadeInUp">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tour-title mb-20">
                            <h3 class="title"><?php echo $tour['title']; ?></h3>
                            <p>
                                <i class="far fa-map-marker-alt"></i>
                                <?php echo $tour['location']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="tour-widget-info">

                            <div class="info-box mb-20">
                                <div class="icon">
                                    <i class="fal fa-box-usd"></i>
                                </div>
                                <div class="info">
                                    <h4><span>From</span>$<?php echo $tour['price']; ?></h4>
                                </div>
                            </div>

                            <div class="info-box mb-20">
                                <div class="icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="info">
                                    <h4><span>Durations</span><?php echo $tour['duration']; ?></h4>
                                </div>
                            </div>

                            <div class="info-box mb-20">
                                <div class="icon">
                                    <i class="fal fa-planet-ringed"></i>
                                </div>
                                <div class="info">
                                    <h4><span>Tour Type</span><?php echo $tour['type']; ?></h4>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--=== Content Row ===-->
            <div class="row">
                <div class="col-xl-8">

                    <!--=== Description ===-->
                    <div class="place-content-wrap pt-45 wow fadeInUp">
                        <h3 class="title">Explore Tour</h3>
                        <p><?php echo $tour['description']; ?></p>

                        <h4>Tour Highlights</h4>
                        <ul class="check-list">
                            <li><i class="fas fa-badge-check"></i>Professional Tour Guide</li>
                            <li><i class="fas fa-badge-check"></i>Comfortable Transportation</li>
                            <li><i class="fas fa-badge-check"></i>Photography Opportunities</li>
                            <li><i class="fas fa-badge-check"></i>Local Cultural Experience</li>
                        </ul>
                    </div>

                    <!--=== Map Box ===-->
                    <div class="map-box mb-60 wow fadeInUp">
                        <iframe src="<?php echo $tour['map']; ?>"></iframe>
                    </div>

                </div>

                <!--=== Sidebar ===-->
                <div class="col-xl-4">
                    <div class="sidebar-widget-area pt-60 pl-lg-30">

                        <!-- Booking Widget -->
                        <div class="sidebar-widget booking-form-widget wow fadeInUp mb-40">
                            <h4 class="widget-title">Booking Tour</h4>
                            <form class="sidebar-booking-form">
                                <div class="booking-item mb-20">
                                    <label>Date</label>
                                    <input type="date" class="form_control">
                                </div>

                                <div class="booking-item mb-20">
                                    <label>Guests</label>
                                    <select class="wide">
                                        <?php for($i=1; $i<=10; $i++): ?>
                                            <option><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>

                                <div class="booking-total mb-20">
                                    <div class="total">
                                        <label>Total</label>
                                        <span class="price">$<?php echo $tour['price']; ?></span>
                                    </div>
                                </div>

                                <div class="submit-button">
                                    <button class="main-btn primary-btn">
                                        Booking Now
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Tour Info -->
                        <div class="sidebar-widget booking-info-widget wow fadeInUp mb-40">
                            <h4 class="widget-title">Tour Information</h4>
                            <ul class="info-list">
                                <li><span><i class="far fa-user-circle"></i>Max Guests<span><?php echo $tour['guests']; ?></span></span></li>
                                <li><span><i class="far fa-map-marker-alt"></i>Location<span><?php echo $tour['location']; ?></span></span></li>
                                <li><span><i class="far fa-clock"></i>Duration<span><?php echo $tour['duration']; ?></span></span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--====== End Place Details Section ======-->

<?php require_once('parts/footer/footer3.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>
