 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screen</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include_once 'includes/conn.php'; ?>
</head> <!-- head end -->

<body>

    <main>

        <h1>Welkom
            <span>
                <?php
                    //Store current date in Variable
                    $currentDate = date("Y/m/d");
                    //Store current Time in Variable
                    $currentTime = date("H:i:s");

                    //Select data from database
                    $sql = "SELECT  naam, datum, tijdstip_van, tijdstip_tot FROM scherm WHERE id=5;";


                    //$sql = sprintf("SELECT * FROM `scherm` WHERE '%s' >= `tijdstip_van` and '%s' <= `tijdstip_tot` limit 1", $currentTime, $currentTime);
                    $sql ="SELECT * FROM `scherm` WHERE '$currentTime' >= `tijdstip_van` and '$currentTime' <= `tijdstip_tot` and `datum` = '$currentDate' limit 1;";


                    //Send the sql to the database
                    $result = mysqli_query($conn, $sql);
                    //Fetch the data from the database
                    $package = mysqli_fetch_assoc($result);


                    if (!empty($package)) {
                        echo $package['naam'];

                    } else {
                        echo '{Klantnaam}' . "<br>";
                        echo $currentDate;
                    }

                    //Show data from column 'naam'
//                    if($currentTime > $package['tijdstip_van'] && $currentTime < $package['tijdstip_tot']){
//                    }
//                        echo $package['naam']. "<br>";
                   // echo "Current Time:" . $currentTime . "<br>";
                   // echo "Database Time:" . $package['tijdstip_van'];


                ?>
            </span>
        </h1>
        <aside></aside>
        <img class="logo" src="images/youaredigital.svg"/>
        <div class="text-wrapper">

            <h3>vergaderruimte</h3>
            <ul>
                <li class="from"> <?php echo $package['tijdstip_van']?> </li>
                <li class="until"> <?php echo $package['tijdstip_tot']?> </li>
            </ul>

        </div> <!-- text-wrapper end -->
        <img class="arrow" src="images/arrow.png"/>
    </main> <!-- main end -->

    <script src="script.js"></script>
</body> <!-- body end -->
</html>

