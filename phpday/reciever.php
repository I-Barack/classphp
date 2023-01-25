<?php
    // print_r($_GET);

    // echo $_GET["person"];

    // print_r($_POST);

    // echo $_POST["person"];

    $_SESSION["in"] = $_POST["person"];

    echo $_SESSION["in"];
?>
<br>
<a href="logout.php">log out</a>

