<!-- Gerrit Wissink -->
<!-- ISTE 240 Individual Project -->
<!-- Spring 2024 -->
<!-- Contact.html -->
<?php
    $title = "Grading";
    require_once('assets/php/header.php');
?>
    <!-- Page Title -->
    <h1 class="page-title">Grading</h1>

    <!-- Main Content for Page -->
    <main id="contacts">
      <h1>Part One</h1>

      <h2>Good Design:</h2>
      <p>
        All four design principles are used well within this website to make the
        content easier to read. There is high color and size contrast on
        important elements like links and titles. The nav bar and card elements
        are repeated all throughout the website to make the pages feel like they
        are all part of a cohesive product. All of the card elements and titles
        are aligned neatly so the eyes of users don't struggle to find a place
        to land. Images and text relating to them are all placed close to each
        other to communicate their relationship.
      </p>

      <h2>Organization:</h2>
      <p>
        Information about the park is separated by topic (ie. trails, animals,
        plants) and these pages in turn are separated into facts and locations.
        The two functions of the website (planning a trip and learning) are
        separated for user ease.
      </p>

      <h2>Content:</h2>
      <p>
        Each page features an interesting blurb on the topic of the page
        followed by visually pleasing card elements. Some card elements navigate
        to other pages and some show examples of the page's topic. Pages without
        cards such as the History and Landing pages feature significantly more
        text instead.
      </p>

      <h2>Quantity:</h2>
      <p>
        The website includes exactly 10 pages each with their own content. These
        pages are Home, Visit, About, Contact, History, Animals, Plants, Trails,
        Lodging, and Overlooks
      </p>

      <h2>Code Design:</h2>
      <p>
        The code is well organized and indented and features comments at the top
        of the page and throughout the code. There is a global css file with
        good selectors and no inline styles (except for ones placed by
        javascript code).
      </p>

      <h2>Navigation:</h2>
      <p>
        Each page has a global nav bar and allows the user to get to any other
        page within two clicks on desktop and three clicks on mobile. Each page
        has a large title on the page and unique title in the browser as well as
        styling to indicate what part of the website the page is on.
      </p>

      <h2>HTML Validates:</h2>
      <p>The HTML Validates and works across all browsers.</p>

      <h2>Grading Page Linked</h2>
      <p>The grading page is linked from the home page at the bottom.</p>

      <h2>Responsive Design</h2>
      <p>
        The website was designed mobile first so it looks polished regardless of
        screen size.
      </p>

      <h1>Part Two</h1>

      <h2>Validation</h2>
      <p>
        All pages validate on W3C's HTML Validator.
      </p>

      <h2>Good Design</h2>
      <p>
        As with the previous submission, the website follows the CRAP design principles.  I addressed the previous submission's 
        feedback by including the header and footer in the grading and references files and adding additional padding to the links 
        in the desktop navigation bar.
      </p>

      <h2>JavaScript:</h2>
      <p>
        Within the script.js file are four key features.  The code opens and closes the mobile nav and does so using 
        a javascript animation.  The code validates input from the comments.  The code changes the image being displayed in the 
        hero on the landing page.  The code creates a google map component also displayed on the landing page.
      </p>

      <h2>DHTML:</h2>
      <p>
        For the DHTML component I created an image carousel that changes the hero image every three seconds.  Additionally, 
        the user can press one of the arrow buttons to change which image is being displayed.
      </p>

      <h2>Comments Page:</h2>
      <p>
        The comments form takes in input, validates it using a javascript function, amd then sanitizes it using a php function, and 
        then sends it to the database.  Comments are taken from the database and displayed below the form.
      </p>

      <h2>PHP Components</h2>
      <p>
        The header and footer are split into components and are included using php on every page of the website.
      </p>

      <h2>Extras:</h2>
      <p>
        For the extras I added a Favicon, I added a google map, and I improved my responsive design.
      </p>

    </main>
<?php
    require_once('assets/php/footer.php');
?>
