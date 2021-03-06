<?php

include_once('header.php');

//$_SESSION['mapid'] = $_GET['id'];
//echo $_SESSION['mapid'];
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h2>Solo Map Event</h2>

            <p>Hieronder ziet u uw map voor het solo event.</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-3">
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
                    <h3>Playlist status</h3>
                    <ul id="status-list" class="list-group">
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div id="map-canvas">

                </div>
            </div>



                    <div class="col-md-3">
                <div id="Playlist">
                    <h3 id="playlist-header">Exclusive Playlist</h3>
                    <ul id="tracks" class="list-group">
                    </ul>
                </div>
                    </div>

        </div>

        <!-- Jquery file  -->
        <!-- Disable jquery script voor wanneer ik in de bus zit. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- googlemaps api inladen -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <!--<script src="js/jquery.js"></script>-->
        <!-- Own JS file -->

        <script src="js/main-solomap.js"></script>


    <?php
    include_once('footer.php');
    ?>