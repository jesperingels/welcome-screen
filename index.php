 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta http-equiv="refresh" content="15" >-->
    <title>Screen</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--Include connection to the database-->
    <?php include_once 'includes/conn.php'; ?>
</head> <!-- head end -->

<body>

    <main>
        <div class="text-welcome">
            <ul>
                <li class="list-text-welcome">welkom</li>
                <li class="db-name">
                    <?php

                        //Store current Date in Variable
                        $currentDate = date("Y/m/d");
                        //Store current Time in Variable
                        $currentTime = date("H:i:s");


                        //Set SQL statement
                        $sql ="SELECT *, TIME_FORMAT(tijdstip_van, '%H:%i'), TIME_FORMAT(tijdstip_tot, '%H:%i') FROM `scherm` WHERE '$currentTime' >= `tijdstip_van` and '$currentTime' <= `tijdstip_tot` and `datum` = '$currentDate' limit 1;";


                        //Send the sql statement to the database
                        $result = mysqli_query($conn, $sql);
                        //Fetch the data from the database
                        $package = mysqli_fetch_assoc($result);

                        //If $package contains data, show 'naam'
                        if (!empty($package)) {
                            echo $package['naam'];
                        //Else show {Klantnaam}
                        } else {
                            echo '{Klantnaam}' . "<br>";
                        }
                    ?>
                </li>
                <li class="db-name" id="db-name-space">
                    <?php
                         if (!empty($package)) {
                                echo $package['achternaam'];
                            //Else show {Klantnaam}
                            } else {
                                echo '{achternaam}' . "<br>";
                            }
                    ?>
                </li>
            </ul>
        </div> <!-- text-welcome end-->

        <div class="text-company">
            <ul>
                <li class="list-text-company">van</li>
                <li class="company-text"><?php echo $package['bedrijf'] ?></li>
            </ul>
        </div>

        <aside></aside>
        <img class="logo" src="images/youaredigital.svg"/>
        <div class="text-location">
            <h3>Graag melden bij</h3>
        </div>
        <div class="text-wrapper">

            <h3 class="location">vergaderruimte</h3>
            <ul>
                <li><img class="calender-image" src="images/calender-01.png"/></li>
                <li class="from"> <?php echo $package["TIME_FORMAT(tijdstip_van, '%H:%i')"]?> </li>
                <li class="until"> <?php echo $package["TIME_FORMAT(tijdstip_tot, '%H:%i')"]?> </li>
            </ul>

        </div> <!-- text-wrapper end -->
        <img class="arrow" src="images/arrow.png"/>
    </main> <!-- main end -->


</body> <!-- body end -->
</html>

