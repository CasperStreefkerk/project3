<?php

include_once('header.php');

?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <!-- test etst etststtest test -->
    <div class="jumbotron">
        <div class="container">
            <h1>Solo Map Event</h1>

            <p>Hieronder ziet u uw map voor het solo event.</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-12">

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
        </div>

        <!-- Jquery file  -->
        <!-- Disable jquery script voor wanneer ik in de bus zit. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <!-- googlemaps api inladen -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <!--<script src="js/jquery.js"></script>-->
        <!-- Own JS file -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/main-solomap.js"></script>
<<<<<<< HEAD
=======

    <?php
>>>>>>> 3bf29b07ce53b28e8863d77122e39214ee19b00d

    <?php
    include_once('footer.php');
    ?>