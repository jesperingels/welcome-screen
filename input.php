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
                        <h4>datum:</h4>
                    </td>
                    <td>
                        <input type="text" name="datum" required/>
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
            <table>
                <thead>
                    <tr>
                        <th width="19%">Voornaam</th>
                        <th width="19%">Achternaam</th>
                        <th width="19%">Bedrijfsnaam</th>
                        <th width="19%">Datum</th>
                        <th width="19%">Tijdstip_van</th>
                        <th width="19%">Tijdstip_tot</th>

                    </tr>
                </thead>
                <tbody>
                    <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                    <tr>
                        <td><?php echo $results->data[$i]['naam']; ?></td>
                        <td><?php echo $results->data[$i]['Country']; ?></td>
                        <td><?php echo $results->data[$i]['Continent']; ?></td>
                        <td><?php echo $results->data[$i]['Region']; ?></td>
                        <td><?php echo $results->data[$i]['Region']; ?></td>
                        <td><?php echo $results->data[$i]['Region']; ?></td>
                        <td><?php echo $results->data[$i]['Region']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main> <!--main end-->

</body>
</html>