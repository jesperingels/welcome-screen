<?php


$naam = $_POST['naam'];
$tijdstip_van = $_POST['tijdstip_van'];
$tijdstip_tot = $_POST['tijdstip_tot'];

if (!empty($naam) || !empty($tijdstip_van) || !empty($tijdstip_tot)){
// voeg het bestand in dat de connectie maakt met de database
    include 'conn.php';
// bereid het SQL statement voor
$sql = ' INSERT Into yad (naam, tijdstip_van, tijdstip_tot) values(?,?,?)';
$query = $db->prepare($sql);
} else{
    echo 'Vul alle velden in';
    die();
}


// voer je statement uit
$query->execute();
// sla het resultaat op in de variabele $result
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// vertaal het resultaat naar een json object
$json = json_encode($result);
// toon het json object
echo $json;
