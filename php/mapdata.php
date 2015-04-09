<?php
require_once("settings.php");

// Hier maak ik een hele simpele query waarbij ik gewoon alle markers van de tabel ophaal.
// Wat jij nu moet doen is een query maken die dus die de gegevens van 1 event ophalen. Het maakt niet uit als deze hardcoded zijn, als hij er maar
//eentje ophaalt (we hoeven tenslotte maar een demo te laten zien dus is 1 event ook goed.)
// Dus wat ik straks wil hebben is dat er 4 markers worden opgehaald, die gebonden zijn aan de event en dat die, zoals hier in de
// $markerData variable wordt gegooid.

// BTW gooi deze data in je "markers" tabel.. anders werkt de solo map page niet. (database bijhouden via sourcetree gaat nog al kut denk ik).



// Daarnaast wil ik bij solo_event_create.php en main_event_create.php dat je gewoon alvast alle input velden neerzet die ik in moet gaan vullen.
// Dus inclusief queries waarmee het naar de database wordt geschreven.. zodat ik straks eigenlijk alleen maar de velden hoef in te vullen
// met javascript. (dat het gelijk werkt ).




$markerQuery = "SELECT * FROM markers";
$retrieveMarkers = mysqli_query($conn, $markerQuery);

if($result = $conn->query($markerQuery)){
    while($row = $result->fetch_array(MYSQL_ASSOC)){
        $markerData[] = $row;
    }
};

$conn->close();

header("Content-type: application/json");
echo json_encode($markerData);
?>
