<!-- Gerrit Wissink -->
<!-- ISTE 240 Final -->
<!-- Spring 2024 -->

<!-- Header -->
<?php
    require_once ('assets/php/header.php');
?>

<!-- Hero Code -->
<div>
    <img id="front-arrow" src="assets/images/front_arrow.png" alt="next image" onclick="changeImage()">
    <img id="back-arrow" src="assets/images/back_arrow.png" alt="previous image" onclick="changeImage()">

    <picture>
        <source id="hero_wide" media="(min-width:600px)" srcset="assets/images/hero_wide.jpeg" />
        <img id="hero" src="assets/images/hero.jpeg" alt="Hero" />
    </picture>
</div>

<!-- Page Title -->
<h1 class="page-title">Shenandoah National Park</h1>

<!-- Main Content for Page -->
<main id="landing-page">
    <p>
        Nestled in Virginia's Blue Ridge Mountains, Shenandoah National Park
        offers over 200,000 acres of pristine wilderness, boasting breathtaking
        landscapes and <a href="about.php">diverse ecosystems</a>. With 500
        miles of <a href="trails.php">trails</a>, including a segment of the
        Appalachian Trail, the park beckons adventurers to hike, spot wildlife,
        and enjoy outdoor activities. Whether you seek solitude among whispering
        trees or marvel at vibrant autumn colors, Shenandoah promises
        unforgettable experiences in nature's embrace. Explore our website to
        learn about the park's
        <a href="about.php">diverse ecosystem and rich history</a> or to
        <a href="visit.php">plan a trip</a> of your own to Virginia's premier
        natural escape.
    </p>


    <!-- Map Element -->
    <section id="map">

    </section>

</main>

<!-- Footer -->
<?php
    require_once ('assets/php/footer.php');
?>