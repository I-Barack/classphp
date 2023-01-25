<?php
    session_start();
    session_unset();
    session_destroy();

    header("location: day4.php");
