<!-- Gerrit Wissink -->
<!-- ISTE 240 Individual Project -->
<!-- 3/04/2024 -->
<!-- visit.html -->
<?php
    $title = "Visit Shenandoah";
    require_once('assets/php/header.php');
?>

    <!-- Page Title -->
    <h1 class="page-title">Visit Shenandoah</h1>

    <!-- Main Content for Page -->
    <main class="card-holder">
      <!-- Page Blurb -->
      <p>
        Shenandoah National Park allows visitors to see the sights in any way
        they like. Visitors can hike Shenandoah's challenging but rewarding
        trails or stop at overlooks while cruising along Skyline Drive. Visitors
        can also stay at various cabins and campgrounds in and around the park
        to let them experience the park across multiple days.
      </p>

      <!-- Card Element -->
      <section class="cards">
        <a href="trails.php">Trails</a>
        <img src="assets/images/trailhead.jpeg" alt="Trails" />
      </section>

      <section class="cards">
        <a href="lodging.php">Lodging</a>
        <img src="assets/images/lodge.png" alt="Cabin" />
      </section>

      <section class="cards">
        <a href="overlook.php">Overlooks</a>
        <img src="assets/images/overlook.jpeg" alt="Overlook" />
      </section>
    </main>
<?php
    require_once('assets/php/footer.php');
?>

