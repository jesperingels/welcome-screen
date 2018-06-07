 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You Are Digital</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include_once 'includes/conn.php'; ?>
</head> <!-- head end -->

<body>

    <main>

        <h1>Welkom
            <span>
                <?php
                    $sql = "SELECT  naam, tijdstip_van, tijdstip_tot FROM scherm WHERE id = 4;";
                    $result = mysqli_query($conn, $sql);
                    $person = mysqli_fetch_assoc($result);
                    echo $person['naam'];
                ?>
            </span>
        </h1>
        <aside></aside>
        <img class="logo" src="images/youaredigital.svg"/>
        <div class="text-wrapper">

            <h3>vergaderruimte</h3>
            <ul>
                <li class="from"> <?php echo $person['tijdstip_van']?> </li>
                <li class="until"> <?php echo $person['tijdstip_tot']?> </li>
            </ul>

        </div> <!-- text-wrapper end -->
        <img class="arrow" src="images/arrow.png"/>
    </main> <!-- main end -->

    <script src="script.js"></script>
</body> <!-- body end -->
</html>