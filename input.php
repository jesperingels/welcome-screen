
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Scherm-input</title>
</head>
<body>

    <main>

        <form action="includes/submit.php" method="POST">

            <table>
                <tr>
                    <td>
                        <h4>Voornaam:</h4>
                    </td>
                    <td>
                        <input type="text" name="naam" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Achternaam:</h4>
                    </td>
                    <td>
                        <input type="text" name="achternaam" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Bedrijfsnaam:</h4>
                    </td>
                    <td>
                        <input type="text" name="bedrijf" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Locatie:</h4>
                    </td>
                    <td>
                        <select name="locatie">
                            <option value="Vergaderruimte">Vergaderruimte</option>
                            <option value="Main Office">Main Office</option>
                        <select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>datum:</h4>
                    </td>
                    <td>
                        <input type="text" name="datum" placeholder="YYYY/MM/DD" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Tijdstip van:</h4>
                    </td>
                    <td>
                        <input type="text" name="tijdstip_van" placeholder="00:00" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>Tijdstip tot:</h4>
                    </td>
                    <td>
                        <input type="text" name="tijdstip_tot" placeholder="00:00" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <button type="submit" name="submit">Verstuur</button>
                    </td>
                </tr>

            </table> <!--table end-->

        </form> <!--form end-->

        <div class="live-db">
            <?php include_once 'includes/conn.php';
            $get_sql = "SELECT * FROM `scherm`";
            $get_result = mysqli_query($conn, $get_sql);

            echo "<table>";
            echo "<tr> <th>naam</th> <th>achternaam</th> <th>bedrijf</th> <th>locatie</th> <th>datum</th> <th>tijdstip_van</th> <th>tijdstip_tot</th> </tr>";

            while($row = mysqli_fetch_assoc($get_result)){
            ?>
                <tr>
                    <td><?php echo $row['naam']; ?></td>
                    <td><?php echo $row['achternaam']; ?></td>
                    <td><?php echo $row['bedrijf']; ?> </td>
                    <td><?php echo $row['locatie']; ?> </td>
                    <td><?php echo $row['datum']; ?></td>
                    <td><?php echo $row['tijdstip_van']; ?></td>
                    <td><?php echo $row['tijdstip_tot']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                </tr>
            <?php
            }
            echo "</table>";
            ?>
        </div>

    </main> <!--main end-->

</body>
</html>