<?php include_once 'includes/conn.php'; ?>
<?php

/*
$directory = "random_photo";
$files = scandir ($directory);
$firstFile = $directory . $files[2];
*/

$firstFile = scandir("random_photo")[2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="15">
    <title>Tussendoor-scherm</title>
</head>
<body style= 'margin:0; min-height: 100%; height:100%;'>

    <?php
        //Set SQL statement
        $sql ="SELECT *, TIME_FORMAT(tijdstip_van, '%H:%i'), TIME_FORMAT(tijdstip_tot, '%H:%i') FROM `scherm` WHERE ADDTIME(CURRENT_TIME(), 001500) >= `tijdstip_van` and ADDTIME(CURRENT_TIME(), 001000) <= `tijdstip_tot` and `datum` = CURRENT_DATE() limit 1;";


        //Send the sql statement to the database
        $result = mysqli_query($conn, $sql);
        //Fetch the data from the database
        $package = mysqli_fetch_assoc($result);

        if (!empty($package)){
            header("Location: http://localhost:8888/welcome-screen");
        } else {

        }

    ?>

<?php
    echo "<img src='random_photo/$firstFile'>";
 ?>

</body>
</html>