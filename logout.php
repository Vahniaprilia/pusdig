<?php
    session_start();
    //logout
    session_destroy();
    //arahkan kehalaman index.php
    header("location: index.php");
?>    