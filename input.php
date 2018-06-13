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

    </main> <!--main end-->

</body>
</html>