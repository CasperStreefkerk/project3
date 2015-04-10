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
            <h2>Group event alles</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        </div>
        <div id="map-canvas"></div>
        <div id="event-info"></div>
        <form method="post" action=""'>
            <input type="submit" name="submit_button" value="<?= $status?>">
        </form>
        <p><b><?=$signUps?></b> mensen gaan naar dit evenement</p>
    </div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main-group_map.js"></script>
    <?php

    include_once('footer.php');

    ?>
