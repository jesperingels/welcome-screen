<?php
// voeg het bestand in dat de connectie maakt met de database
include 'conn.php';
// bereid het SQL statement voor
$sql = ' SELECT';

$query = $db->prepare($sql);



// voer je statement uit
$query->execute();
// sla het resultaat op in de variabele $result
$result = $query->fetchAll(PDO::FETCH_ASSOC);

// vertaal het resultaat naar een json object
$json = json_encode($result);
// toon het json object
echo $json;
