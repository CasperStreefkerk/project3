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
        <div class="col-md-6">
            <h2>Maak hier een group event aan voor uw fans.</h2>
            <p>Group events zijn events waar een grote groep mensen bij elkaar komt. Klik hieronder 1 plaats aan waar u wilt dat het event plaatsvind. Verder moet u een begin en eindtijd specificeren en een kleine beschrijving meegeven.</p>
            <div id="map-canvas">
            </div>
        </div>

        <div class="col-md-6">

<!--        De form moet nog in een divje worden gezet, maar dat laat ik maar aan jou over.-->
        <form action="succes.php" method="post">
            <div class="form-group">
            <label for="input-latitude1">Latitude:</label>
            <input type="text" name="input-latitude1" id="input-latitude1" class="form-control">
            </div>

            <div class="form-group">
            <label for="input-longitude1">Longitude:</label>
            <input type="text" name="input-longitude1" id="input-longitude1" class="form-control">
            </div>

            <div class="form-group">
            <label for="locatie">Naam Event:</label>
            <input type="" name="locatie" class="form-control">
            </div>

            <div class="form-group">
            <label for="starttijd">Start:</label>
            <input type="time" name="starttijd" class="form-control">
            </div>

            <div class="form-group">
            <label for="eindtijd">Eind:</label>
            <input type="time" name="eindtijd" class="form-control">
            </div>

            <div class="form-group">
            <label for="beschrijving">Beschrijving:</label>
            <textarea name="beschrijving" class="form-control"></textarea>
            </div>

            <input type="submit" name="submit" class="btn btn-default">
        </form>
            </div>
    </div>


    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main-group_event_create.js"></script>
    <?php

    include_once('footer.php');

    ?>
</div>
