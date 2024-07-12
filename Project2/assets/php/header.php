<!-- Gerrit Wissink -->
<!-- ISTE 240 Final -->
<!-- Spring 2024 -->

<!-- Header -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/styles/styles.css" />

    <!-- GOOGLE MAP -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQR2sfhmplOHzs-vIkYhGYtmwLiN1o_ks&loading=async&callback=initMap"></script>

    <!-- Javascript -->
    <script src="assets/js/script.js"></script>

    <!-- Dynamic Title -->
    <title><?php echo isset($title) ? $title : "Shenandoah National Park"; ?></title>
  </head>
  <body>

  <!-- Include Nav -->
  <?php
    require_once("nav.php");
    ?>