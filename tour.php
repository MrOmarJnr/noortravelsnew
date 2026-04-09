<?php $head_title="Tours || NoorTravels"; ?>
<?php require_once("tours-data.php"); ?>

<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header3.php'); ?>

<style>
.places-section {
    padding-top: 160px;
    padding-bottom: 80px;
}

/* CARD */
.single-place-item {
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: 0.3s;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.single-place-item:hover {
    transform: translateY(-5px);
}

/* IMAGE */
.place-img {
    width: 100%;
    height: 220px;
    overflow: hidden;
    border-bottom: 1px solid #eee;
}

.place-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* CONTENT */
.place-content {
    padding: 20px;
    flex: 1;
    background: #fff;
}

.place-content .title {
    font-size: 18px;
    font-weight: 600;
}

/* PRICE */
.price {
    color: #2ecc71;
    font-weight: bold;
}

/* TITLE */
.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-weight: 700;
}

/* SPACING */
.single-place-item {
    margin-bottom: 30px;
}
</style>

<section class="places-section pb-100">
<div class="container">

<div class="section-title">
    <h2>Explore Our Tours</h2>
    <p>Discover unforgettable journeys with Noor Travels</p>
</div>

<div class="row justify-content-center">

<?php foreach($tours as $key => $tour): ?>

<div class="col-xl-4 col-md-6 col-sm-12 places-column">
<div class="single-place-item mb-60 wow fadeInUp">

<div class="place-img">
<img src="<?php echo $tour['image1']; ?>" alt="">
<br>
</div>

<div class="place-content">

<ul class="ratings">
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><a href="#">(<?php echo $tour['rating']; ?>)</a></li>
</ul>

<h4 class="title">
<a href="#"><?php echo $tour['title']; ?></a>
</h4>

<p class="location">
<i class="far fa-map-marker-alt"></i>
<?php echo $tour['location']; ?>
</p>

<p class="price">
Price <span>$<?php echo $tour['price']; ?></span>
</p>

<div class="meta">
<span><i class="far fa-clock"></i> <?php echo $tour['duration']; ?></span>
<span><i class="far fa-user"></i> <?php echo $tour['guests']; ?></span>
<span>
<a href="#">
Details <i class="far fa-long-arrow-right"></i>
</a>
</span>
</div>

</div>
</div>
</div>

<?php endforeach; ?>

</div>
</div>
</section>

<?php require_once('parts/footer/footer3.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>