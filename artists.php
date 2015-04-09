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
                <h2>Solo event</h2>
                <p>Hieronder kunt u een solo event aanmaken. Een solo event is een activiteit wat de gebruiker in zijn/haar eenje voltooid. U geeft 4 plaatsen aan die de gebruiker moet bezoeken. Als deze bezocht zijn speelt de gebruiker op die manier een playlist vrij. </p>
                <p><a class="btn btn-primary btn-lg" href="solo_event_create.php" role="button">Maak solo event!</a></p>
            </div>
            <div class="col-md-6">
                <h2>Button group event</h2>
                <p>Hieronder kunt u een group event aanmaken. Een group event is een event waarop meerdere mensen zich aan kunnen melden. Hier kan op een bepaalde plek een activiteit georganiseerd worden. Hierbij kunt u denken aan een mini concert, flashmob of een promotie actie. </p>
                <p><a class="btn btn-primary btn-lg" href="group_event_create.php" role="button">Maak group event!</a></p>
            </div>
</div>



<?php

include_once('footer.php');

?>
