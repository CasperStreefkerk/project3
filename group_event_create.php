<?php

include_once('header.php');

?>



<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Maak een group event!</h1>
        <p>Maak hier uw solo event aan.</p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <h2>Maak hier een group event aan voor uw fans.</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <div id="map-canvas">
            </div>
        </div>

<!--        De form moet nog in een divje worden gezet, maar dat laat ik maar aan jou over.-->
        <form action="succes.php" method="post">
            <label for="input-latitude1">Latitude:</label>
            <input type="text" name="input-latitude1" id="input-latitude1">
            <label for="input-longitude1">Longitude:</label>
            <input type="text" name="input-longitude1" id="input-longitude1">

            <label for="locatie">Naam Event:</label>
            <input type="" name="locatie">

            <label for="starttijd">Start:</label>
            <input type="time" name="starttijd">

            <label for="eindtijd">Eind:</label>
            <input type="time" name="eindtijd">

            <label for="beschrijving">Beschrijving:</label>
            <textarea name="beschrijving"></textarea>
            <input type="submit" name="submit">
        </form>
    </div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main-group_event_create.js"></script>
    <?php

    include_once('footer.php');

    ?>
