<!--Volgorde bij programmeren: (allemaal must haves)-->
<!--1.Markers worden vanuit een database ingeladen.-->
<!--2.De gebruiker kan de map bekijken inclusief de markers.-->
<!--3.Als er op een marker geklikt word staat er meer informatie.-->
<!--4.Onderscheid in markers, bij verschillende activiteiten.-->
<!--5.Er kunnen markers aan de map toegevoegd worden door de admin.-->
<!--6.Er word bijgehouden welke plaatsen zijn bezocht en welke niet.-->
<!--Coördinaten Oosterland 51.646238702, 4.035122203 voor testen-->
<?php
include_once('php/settings.php');

if(isset($_POST['submit'])){
    $plaatsnaam = $_POST['locatie'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $insertMarker = "INSERT INTO marker (latitude, longitude, locatie) VALUES('".$latitude."', '".$longitude."', '".$plaatsnaam."')";
    mysqli_query($conn, $insertMarker);
};
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

</head>
<body>
<div id="map-canvas"></div>
<div id="insert-form">
    <form method="post">
        <p>Maak een nieuwe marker</p>
        <label for="locatie">Plaatsnaam</label>
        <input type="text" name="locatie">
        <label for="latitude">Latitude</label>
        <input type="text" name="latitude" id="input-latitude">
        <label for="longitude">Longitude</label>
        <input type="text" name="longitude" id="input-longitude">
        <input type="submit" name="submit">
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="js/main-map.js"></script>
</body>
</html