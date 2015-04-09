<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Solo Event</title>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- own stylesheet -->
    <link rel="stylesheet" href="css/googlemaps.css">
</head>
<body>
<div class="container">
    <div id="map-canvas">

    </div>
<!--Dit is voor het opslaan van true of false bij bezochte markers. (niet aankomen Casper!)-->
    <form method="post">
        <input type="hidden" name="marker1">
        <input type="hidden" name="marker2">
        <input type="hidden" name="marker3">
        <input type="hidden" name="marker4">
    </form>

<!--    Divje waar de status van de markers zichtbaar is. De div mag je verwijderen als je wil, zolang je maar niet -->
<!--    de ul veranderd/ aanpast. (DE LI ELEMENTEN WORDEN IN JQUERY AUTOMATISCH ROOD GEMAAKT, VERANDERD IK LATER WEL)-->
<!--    Maar ik meld het even voor het geval je daar mee struggled ;)-->
    <div id="marker-status">
        <ul id="status-list">
        </ul>
    </div>
</div>
<!-- Jquery file  -->
<!-- Disable jquery script voor wanneer ik in de bus zit. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--<script src="js/jquery.js"></script>-->
<!-- Own JS file -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/main-solomap.js"></script>
</body>
</html>