<?php

include_once('header.php');

?>



<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Maak hier een event aan.</h1>
        <p>Hier kan je een event aanmaken, je kan kiezen tussen een solo event of een group event.</p>
    </div>
</div>

<div class="container">
    <!--    <!-- Example row of columns -->
    <div class="row">
            <div class="col-md-6">
                <h2>Button solo event</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="solo_event_create.php" role="button">Maak solo event!</a></p>
            </div>
            <div class="col-md-6">
                <h2>Button group event</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="group_event_create.php" role="button">Maak group event!</a></p>
            </div>
</div>



<?php

include_once('footer.php');

?>
