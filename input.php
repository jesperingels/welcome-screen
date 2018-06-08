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
                        <h4>klantnaam:</h4>
                    </td>
                    <td>
                        <input type="text" name="naam" required/>
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
                        <h4>tijdstip van:</h4>
                    </td>
                    <td>
                        <input type="text" name="tijdstip_van" placeholder="00:00" required/>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h4>tijdstip tot:</h4>
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