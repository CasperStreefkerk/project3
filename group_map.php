<?php
include_once('header.php');

$_SESSION['signUps'] = 32;
$_SESSION['status'] = "Ik doe mee!";
$signUps = $_SESSION['signUps'];
$status = $_SESSION['status'];


if(isset($_POST['submit_button'])){
    $signUps++;
    $status = "Ingeschreven!";
};
?>



<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Dit is uw group event!</h1>
        <p>Bekijk de locatie hieronder.</p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <h2>Group event</h2>
            <p>Super tof event georganiseerd door lokale Rotterdamse artiesten. Meld je hieronder aan en nodig zoveel mogelijk vrienden uit. Er staat iets groots te gebeuren!</p>
        </div>
        <div id="map-canvas"></div>
        <div id="event-info"></div>

        <form method="post" action="">
            <div class="form-group">
            <input  class="btn-success" type="submit" name="submit_button" value="<?= $status?>">
            </div>
        </form>
        <p><b><?=$signUps?></b> mensen gaan naar dit evenement</p>
    </div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main-group_map.js"></script>
    <?php

    include_once('footer.php');

    ?>
