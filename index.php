<?php // Include connection to the database ?>
<?php include_once 'includes/conn.php'; ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="15">
    <title>Screen</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head> <!-- head end -->

<body>

    <main>
        <div class="text-welcome">
            <ul>
                <li class="list-text-welcome">welkom</li>
                <li class="db-name">
                    <?php

                        //Set SQL statement
                        $sql ="SELECT *, TIME_FORMAT(tijdstip_van, '%H:%i'), TIME_FORMAT(tijdstip_tot, '%H:%i') FROM `scherm` WHERE ADDTIME(CURRENT_TIME(), 001500) >= `tijdstip_van` and ADDTIME(CURRENT_TIME(), 001000) <= `tijdstip_tot` and `datum` = CURRENT_DATE() limit 1;";


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
                </li>
                <li class="db-name" id="db-name-space">
                    <?php
                         if (!empty($package)) {
                                echo $package['achternaam'];
                            //Else show {Klantnaam}
                            } else {
                                echo '' . "<br>";
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

            <h3 class="location"><?php echo $package['locatie'] ?></h3>
            <ul>
                <li><img class="calender-image" src="images/calender-01.png"/></li>
                <li class="from"> <?php echo $package["TIME_FORMAT(tijdstip_van, '%H:%i')"]?> </li>
                <li class="until"> <?php echo $package["TIME_FORMAT(tijdstip_tot, '%H:%i')"]?> </li>
            </ul>

        </div> <!-- text-wrapper end -->
        <?php
            if($package['locatie'] == "Vergaderruimte"){
                echo "<img class='arrow-left' src='images/arrow.png' style='position: absolute;
                                                                                    top: 54%;
                                                                                    right: 65%;
                                                                                    width: 20%;
                                                                                    height: 20%;'/>";
            } elseif($package['locatie'] == "Main Office"){
                echo "<img class='arrow-right' src='images/arrow.png' style='position: absolute;
                                                                                      top: 76%;
                                                                                      right: 30%;
                                                                                      transform: rotate(0deg);
                                                                                      width: 20%;
                                                                                      height: 20%;'/>";
            }
        ?>

    </main> <!-- main end -->


</body> <!-- body end -->
</html>

