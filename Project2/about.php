<!-- Gerrit Wissink -->
<!-- ISTE 240 Individual Project -->
<!-- Spring 2024 -->
<!-- About.html -->
<?php
    $title = "Learn About Shenandoah";
    require_once('assets/php/header.php');
?>

    <!-- Page Title -->
    <h1 class="page-title">Learn About Shenandoah</h1>

    <!-- Main Content for Page -->
    <main class="card-holder">
      <!-- Page Blurb -->
      <p>
        From its varied ecosystem to its rich history, there's lots to learn
        about Shenandoah National Park. Here you can learn about the most
        significant plants and animals to inhabit Shenandoah and the people and
        events that led to the parks creation and development.
      </p>

      <!-- Card Element -->
      <section class="cards">
        <a href="history.php">History</a>
        <img src="assets/images/History.jpeg" alt="History" />
      </section>

      <section class="cards">
        <a href="animals.php">Animals</a>
        <img src="assets/images/black_bear.jpeg" alt="Animals" />
      </section>

      <section class="cards">
        <a href="plants.php">Plants</a>
        <img src="assets/images/plants.jpeg" alt="Plants" />
      </section>
    </main>
<?php
    require_once('assets/php/footer.php');
?>
