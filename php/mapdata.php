<?php
require_once("settings.php");

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
