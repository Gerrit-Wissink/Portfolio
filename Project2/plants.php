<!-- Gerrit Wissink -->
<!-- ISTE 240 Individual Project -->
<!-- Spring 2024 -->
<!-- Plants.html -->
<?php
    $title = "Plants";
    require_once('assets/php/header.php');
?>

    <!-- Page Title -->
    <h1 class="page-title">Plants</h1>

    <!-- Main Content for Page -->
    <main class="card-holder">
      <!-- Page Blurb -->
      <p>
        Over 1400 species of plants can be found in Shenandoah National Park
        ranging from oak trees to wildflowers to fungi. Here are some of the
        plants that are most common in Shenandoah National Park.
      </p>

      <!-- Break for Formatting -->
      <br />

      <!-- Card Element -->
      <section class="cards">
        <h2>Netted Chain Fern</h2>
        <img
          src="assets/images/netted_chain_fern.jpeg"
          alt="Netted Chain Fern"
        />
      </section>

      <section class="cards">
        <h2>Red Oak</h2>
        <img src="assets/images/red_oak.jpeg" alt="Red Oak" />
      </section>

      <section class="cards">
        <h2>Quaker Ladies</h2>
        <img src="assets/images/quaker_ladies.jpg" alt="Quaker Ladies" />
      </section>
    </main>
<?php
    require_once('assets/php/footer.php');
?>
