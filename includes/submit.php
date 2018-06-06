<?php

include_once 'conn.php';

    $name = $_POST['naam'];
    $time_start = $_POST['tijdstip_van'];
    $time_end = $_POST['tijdstip_tot'];

    $sql = "INSERT INTO scherm (naam, tijdstip_van, tijdstip_tot) VALUES ('$name','$time_start','$time_end');";
    $result = mysqli_query($conn, $sql);

    header("Location: ../input.php?signup=succes");