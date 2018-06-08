<?php

include_once 'conn.php';



    $name = $_POST['naam'];
    $date = $_POST['datum'];
    $time_start = $_POST['tijdstip_van'];
    $time_end = $_POST['tijdstip_tot'];

    $sql = "INSERT INTO scherm (naam, datum, tijdstip_van, tijdstip_tot) VALUES ('$name','$date','$time_start','$time_end');";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($_server['REQUEST_METHOD'] == 'POST'){
        echo "Submitted!";
    } else{
        echo "error, message not sent";
    }
    header("Location: ../input.php?signup=succes");