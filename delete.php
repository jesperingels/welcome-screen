<?php
// Your database info
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'yad';

if (!isset($_GET['id']))
{
    echo 'No ID was given...';
    exit;
}

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error)
{
    die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
}

$sql = "DELETE FROM scherm WHERE id = ?";
if (!$result = $con->prepare($sql))
{
    die('Error: Query failed: (' . $con->errno . ') ' . $con->error);
}

if (!$result->bind_param('i', $_GET['id']))
{
    die('Error: Binding parameters failed: (' . $result->errno . ') ' . $result->error);
}

if (!$result->execute())
{
    die('Execute failed: (' . $result->errno . ') ' . $result->error);
}

if ($result->affected_rows > 0)
{
    echo "Het geselecteerde item is met succes verwijderd.";
    ?> <button><a href="input.php">Terug</a></button> <?php
}
else
{
    echo "Kan item niet verwijderen.";
}
$result->close();
$con->close();