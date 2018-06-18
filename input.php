
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Scherm-input</title>
</head>
<body>

    <main>

        <form class="container" action="includes/submit.php" method="POST">

            <div class="input-container d-flex flex-column">
                <div class="input-wrapper">
                    <div>
                        naam:
                    </div>
                    <div>
                        <input type="text" name="naam" required/>
                    </div>
                </div> <!-- input-wrapper end -->

                <div class="input-wrapper">
                    <div>
                        Bedrijf:
                    </div>
                    <div>
                        <input type="text" name="bedrijf" required/>
                    </div>
                </div> <!-- input-wrapper end -->

                <div class="input-wrapper">
                    <div>
                        datum:
                    </div>
                    <div>
                        <input type="text" name="datum" placeholder="YYYY/MM/DD" required/>
                    </div>
                </div> <!-- input-wrapper end -->

                <div class="input-wrapper">
                    <div>
                        Tijdstip van:
                    </div>
                    <div>
                        <input type="text" name="tijdstip_van" placeholder="00:00" required/>
                    </div>
                </div> <!-- input-wrapper end -->

                <div class="input-wrapper">
                    <div>
                        Tijdstip tot:
                    </div>
                    <div>
                        <input type="text" name="tijdstip_tot" placeholder="00:00" required/>
                    </div>
                </div> <!-- input-wrapper end -->

                <div class="input-wrapper">
                    <div>
                        <button type="submit" name="submit">Verstuur</button>
                    </div>
                </div> <!-- input-wrapper end -->

            </div> <!--input-container end-->

        </form> <!--form end-->

        <div class="live-db">
            <?php include_once 'includes/conn.php';
            $get_sql = "SELECT * FROM `scherm`";
            $get_result = mysqli_query($conn, $get_sql);
            ?>

            <div class="db-container ">
                <div class="db-row d-flex flex-grow">
                    <div class="db-header">naam</div>
                    <div class="db-header">bedrijf</div>
                    <div class="db-header">datum</div>
                    <div class="db-header">tijdstip_van</div>
                    <div class="db-header">tijdstip_tot</div>
                </div>

                <?php
                while($row = mysqli_fetch_assoc($get_result)){
                ?>
                    <div class="db-row d-flex db-data">
                        <div class="db-col"><?php echo $row['naam']; ?></div>
                        <div class="db-col"><?php echo $row['bedrijf']; ?> </div>
                        <div class="db-col"><?php echo $row['datum']; ?></div>
                        <div class="db-col"><?php echo $row['tijdstip_van']; ?></div>
                        <div class="db-col"><?php echo $row['tijdstip_tot']; ?></div>
                        <div class="db-col"><a style="color:red;" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></div>
                    </div>
                <?php
                }
                ?>
            </div> <!-- db-container end -->
        </div>

    </main> <!--main end-->

</body>
</html>