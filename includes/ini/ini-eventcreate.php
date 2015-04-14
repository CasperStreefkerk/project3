<?php
if(isset($_POST['createSoloEvent'])) {
    //var_dump($_POST);

    $latitude1 = $_POST['input-latitude1'];
    $longitude1 = $_POST['input-longitude1'];
    $latitude2 = $_POST['input-latitude2'];
    $longitude2 = $_POST['input-longitude2'];
    $latitude3 = $_POST['input-latitude3'];
    $longitude3 = $_POST['input-longitude3'];
    $latitude4 = $_POST['input-latitude4'];
    $longitude4 = $_POST['input-longitude4'];
    $name = $_POST['locatie'];
    $description = $_POST['beschrijving'];
    $artistid = $_SESSION['id'];

    $marker1 = "0";
    $marker2 = "0";
    $marker3 = "0";
    $marker4 = "0";
    $location_name1 = "Marker 1";
    $location_name2 = "Marker 2";
    $location_name3 = "Marker 3";
    $location_name4 = "Marker 4";
    $description1 = "Beschrijving";

    //echo $lat1 . ", ". $long1 . ", ". $lat2 . ", ". $long2 . ", ". $lat3 . ", ". $long3 . ", ". $lat4 . ", ". $long4;
    //echo $name  . ", ". $description . ", ". $artistid;
    $event_id = $db->createSoloEvent($name, $description, $artistid, $marker1, $marker2, $marker3, $marker4);
    $markerinsert1 = $db->insertMarkers1($location_name1, $latitude1, $longitude1, $description1, $event_id);
    $markerinsert2 = $db->insertMarkers1($location_name2, $latitude2, $longitude2, $description1, $event_id);
    $markerinsert3 = $db->insertMarkers1($location_name3, $latitude3, $longitude3, $description1, $event_id);
    $markerinsert4 = $db->insertMarkers1($location_name4, $latitude4, $longitude4, $description1, $event_id);
//    echo $markerinsert1;
//    echo $markerinsert2;
//    echo $markerinsert3;
//    echo $markerinsert4;
    //var_dump($markerinsert1);


    $db->editSoloEvent($event_id, $markerinsert1, $markerinsert2, $markerinsert3, $markerinsert4);
    header("Location: succes.php");


}
