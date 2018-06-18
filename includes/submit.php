<?php

include_once 'conn.php';

    $name = $_POST['naam'];
    $company = $_POST['bedrijf'];
    $date = $_POST['datum'];
    $time_start = $_POST['tijdstip_van'];
    $time_end = $_POST['tijdstip_tot'];

    $sql = "INSERT INTO scherm (naam, bedrijf, datum, tijdstip_van, tijdstip_tot) VALUES ('$name','$company','$date','$time_start','$time_end');";

    $result = mysqli_query($conn, $sql);

    if ($_server['REQUEST_METHOD'] == 'POST'){
        echo "Submitted!";
    } else{
        echo "error, message not sent";
    }
    header("Location: ../input.php?signup=succes");