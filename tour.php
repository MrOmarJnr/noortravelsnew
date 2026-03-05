<?php $head_title="Tours || NoorTravels"; ?>
<?php require_once("tours-data.php"); ?>

<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header3.php'); ?>



<section class="places-section pb-100">
<div class="container">
<div class="row justify-content-center">

<?php foreach($tours as $key => $tour): ?>

<div class="col-xl-4 col-md-6 col-sm-12 places-column">
<div class="single-place-item mb-60 wow fadeInUp">
<div class="place-img">
<img src="<?php echo $tour['image']; ?>" alt="">
</div>
<div class="place-content">
<div class="info">
<ul class="ratings">
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><a href="#"><?php echo "(".$tour['rating'].")"; ?></a></li>
</ul>
<h4 class="title">
<a href="#">
<?php echo $tour['title']; ?>
</a>
</h4>
<p class="location">
<i class="far fa-map-marker-alt"></i><?php echo $tour['location']; ?>
</p>
<p class="price">
<i class="fas fa-usd-circle"></i>
Price<span class="currency">$</span><?php echo $tour['price']; ?>
</p>
<div class="meta">
<span><i class="far fa-clock"></i><?php echo $tour['duration']; ?></span>
<span><i class="far fa-user"></i><?php echo $tour['guests']; ?></span>
<span>
<a href="#">
Details<i class="far fa-long-arrow-right"></i>
</a>
</span>
</div>
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
