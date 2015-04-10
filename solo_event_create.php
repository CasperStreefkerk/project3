<?php
include_once('header.php');

?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Maak een solo event!</h1>
            <p>Maak hier uw solo event aan.</p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-6">
                <h2>Maak hier een solo event aan voor uw fans.</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <div id="map-canvas">
                </div>
            </div>
            <div class="col-md-6">
<!--                Dit ziet er "nu" heel onoverzichtelijk uit, maar als goed is, is iedere label verbonden aan de juiste inputfield
                    De locatie en textarea input kan je veranderen naar iets anders als je wilt, want ik vul er toch niks in met Jquery.-->
                <form action="succes.php" method="post">
                    <label for="input-latitude1">Marker 1 latitude:</label>
                    <input type="text" name="input-latitude1" id="input-latitude1">
                    <label for="input-longitude1">Marker 1 longitude:</label>
                    <input type="text" name="input-longitude1" id="input-longitude1">

                    <label for="input-latitude2">Marker 2 latitude:</label>
                    <input type="text" name="input-latitude2" id="input-latitude2">
                    <label for="input-longitude2">Marker 2 longitude:</label>
                    <input type="text" name="input-longitude2" id="input-longitude2">

                    <label for="input-latitude3">Marker 3 latitude:</label>
                    <input type="text" name="input-latitude3" id="input-latitude3">
                    <label for="input-longitude3">Marker 3 longitude:</label>
                    <input type="text" name="input-longitude3" id="input-longitude3">

                    <label for="input-latitude4">Marker 4 latitude:</label>
                    <input type="text" name="input-latitude4" id="input-latitude4">
                    <label for="input-longitude4">Marker 4 longitude:</label>
                    <input type="text" name="input-longitude4" id="input-longitude4">

                    <label for="locatie">Locatie:</label>
                    <input type="" name="locatie">

                    <label for="beschrijving">Beschrijving:</label>
                    <textarea name="beschrijving"></textarea>
                    <input type="submit" name="submit">
                </form>

            </div>



        </div>
    </div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main-solo_event_create.js"></script>
<?php
include_once('footer.php');
?>