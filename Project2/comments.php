<!-- Gerrit Wissink -->
<!-- ISTE 240 Final -->
<!-- Spring 2024 -->

<!-- Header -->
<?php
    $title = "Comments";
    include "assets/php/header.php";
?>

<h1>Leave a Comment</h1>

<fieldset class='makeComment'>
    <legend><h3>Make a Comment</h3></legend>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="commentForm" onsubmit="return validateInfo()">
        <label for="name">Name:</label>
        <input type="text"
                    name="name"
                    id="name"
                    required
                    tabindex="1"><br><br>
        <textarea name="comment" 
                    id="comment" 
                    placeholder="Tell us about your experience!"
                    value=""
                    rows="12"
                    cols="30"
                    required
                    tabindex="2"></textarea><br><br>
        <input type="submit" id="submit" value="Post Comment">
    </form>
</fieldset>

<!-- Code for Sending Comment to Database -->
<?php
    require('../../connection.db.php');
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    if (isset($_POST['name'])) {
        $name = sanitize($_POST['name']);
    }
    if (isset($_POST['comment'])) {
        $message = sanitize($_POST['comment']);
    }
    $comment = $mysqli -> prepare("INSERT INTO `Shenandoah` (`name`, `comment`) VALUES (?, ?)");
    $comment -> bind_param("ss", $name, $message);
    $comment -> execute();

    $mysqli -> close();

    function sanitize($str) {
        $str = trim($str);
        $new_str = htmlentities($str, ENT_QUOTES);
        $new_str = strip_tags($new_str);

        return $new_str;
    }
?>

<!-- Code for getting comments from database -->
<?php
    require('../../connection.db.php');
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }

    $sql = "SELECT * FROM Shenandoah ORDER BY date DESC";

    if ($result = $mysqli -> query($sql)) { 
        while ($row = $result -> fetch_assoc()) {
            echo "<section class='comment'>" . "<h3>" . $row['name'] . "</h3>" . "<p>" . $row['comment'] . "</p>" . "</section>";
        }
        $result -> free_result();
    }
    $mysqli -> close();
?>

<!-- Footer code -->
<?php
    require_once("assets/php/footer.php");
?>
