<?php // Include connection to the database ?>
<?php include_once 'includes/conn.php'; ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="300">
    <title>Scherm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/globals.css">
</head> <!-- head end -->

<body>

    <main>

        <div class="text-wrapper">

            <div class="text-welcome-wrapper">

                <div class="text-welcome">welkom</div>
                <div class="db-name">
                    <?php

                        $currentDate = date("d-m-Y");

                        //Set SQL statement
                        $sql ="SELECT *, TIME_FORMAT(tijdstip_van, '%H:%i'), TIME_FORMAT(tijdstip_tot, '%H:%i') FROM `scherm` WHERE ADDTIME(CURRENT_TIME(), 001500) >= `tijdstip_van` and ADDTIME(CURRENT_TIME(), 001500) <= `tijdstip_tot` and `datum` = CURRENT_DATE() limit 1;";

                        //Send the sql statement to the database
                        $result = mysqli_query($conn, $sql);
                        //Fetch the data from the database
                        $package = mysqli_fetch_assoc($result);


                       if (!empty($package)){

                        } else {
                            header("Location: http://localhost:8888/welcome-screen/random.php");
                        }

                        //If $package contains data, show 'naam'
                        if (!empty($package)) {
                            echo $package['naam'];
                        //Else show {Klantnaam}
                        } else {
                            echo '' . "<br>";
                        }
                    ?>
                </div>

            </div>

            <div class="text-company-wrapper">

                <div class="text-company">
                    <?php
                        if(!empty($package['bedrijf'])){
                            echo "van";
                        } else{
                            echo "";
                        }
                    ?>
                </div>
                <div class="db-name">
                    <?php echo $package['bedrijf'] ?>
                </div>

            </div> <!-- text-company-wrapper end -->

        </div> <!-- text-wrapper end-->

        <aside></aside>

        <img class="logo" src="images/youaredigital.svg"/>

        <div class="text-general">
            Loop gerust binnen
        </div>

        <div class="text-location-wrapper">

            <div class="location"> Main Office <?php /*echo $package['locatie'] */?></div>
            <div class="time">
                <div><img class="calender-image" src="images/calender-01.png"/></div>
                <div class="time-from"> <?php echo $package["TIME_FORMAT(tijdstip_van, '%H:%i')"]?> </div>
                <div class="time-until"> <?php echo $package["TIME_FORMAT(tijdstip_tot, '%H:%i')"]?> </div>
            </div>

        </div> <!-- text-location-wrapper end -->
        <img class="arrow-right" src="images/bolletjes.svg">

    </main> <!-- main end -->

</body> <!-- body end -->
</html>

