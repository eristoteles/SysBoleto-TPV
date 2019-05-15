<?php

    header('Content-Type: text/html; charset=utf8');

    $mysqli = mysqli_connect("localhost", "root", "Esscmj8d00", "sysboleto");

    mysqli_query($mysqli, "SET NAMES 'utf8'");
    mysqli_query($mysqli, "SET character_set_connection=utf8");
    mysqli_query($mysqli, "SET character_set_client=utf8");
    mysqli_query($mysqli, "SET character_set_results=utf8");

?>