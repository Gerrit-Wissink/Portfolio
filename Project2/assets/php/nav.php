<!-- Gerrit Wissink -->
<!-- ISTE 240 Final -->
<!-- Spring 2024 -->

<!-- Code for mobile Nav bar -->
<nav id="hidden-nav" style="width: 0vw; height: 0vh">
      <button class="hidden-link" onclick="closeNav();" id="close">
        <img
          class="hidden-link"
          src="assets/images/Close.png"
          id="close-icon"
          alt="Close Nav"
        />
      </button>
      <hr class="hidden-rule" />
      <a class="hidden-link" href="index.php">Home</a>
      <hr class="hidden-rule" />
      <a class="hidden-link" href="visit.php">Visit</a>
      <hr class="hidden-rule" />
      <a class="hidden-link" href="about.php">About</a>
      <hr class="hidden-rule" />
      <a class="hidden-link" href="comments.php">Comments</a>
      <hr class="hidden-rule" />
      <a class="hidden-link" href="contact.php">Contact</a>
      <hr class="hidden-rule" />
    </nav>

    <!-- Code for Mobile Section Holding Logo and Nav Opener -->
    <section class="icon-holder">
      <img
        src="assets/images/icon.png"
        class="icon"
        alt="Shenandoah Logo"
      />
      <button onclick="openNav();" id="menu">
        <img src="assets/images/Menu_White.png" id="menu-icon" alt="Open Nav" />
      </button>
    </section>

    <!-- Code for Desktop Nav Bar -->
    <nav id="desktop-nav">
      <img
        src="assets/images/icon.png"
        class="icon"
        alt="Shenandoah Logo"
      />
      <a href="index.php">Home</a>
      <a href="visit.php">Visit</a>
      <a href="about.php">About</a>
      <a href="comments.php">Comments</a>
      <a href="contact.php">Contact</a>
    </nav>