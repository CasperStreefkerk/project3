<?php
require_once("settings.php");

//$eventid = $_SESSION['mapid'];
//$markerQuery = "SELECT * FROM markers WHERE event_id = '". $eventid . "'";


$markerQuery = "SELECT * FROM markers WHERE event_id = 15";
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
