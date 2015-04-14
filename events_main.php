<?php

include_once('header.php');

?>



<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Events selecteren</h1>
        <p>Kies hier een event waar je aan wilt deelnemen.</p>
    </div>
</div>

<div class="container">
<!--    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-6">
            <h2>Solo Event 1</h2>
            <p>Dit solo event vindt plaats in Rotterdam. Doe mee met dit event en speel op die manier een gave playlist vrij van een Rotterdamse artiest. </p>
            <p><a class="btn btn-default" href="solo_map.php" role="button">Doe mee!</a></p>

            <p class="bg-info"><a href="event_list.php">Of bekijk hier alle overige events</a></p>
        </div>
        <div class="col-md-6">
            <h2>Group Event 1</h2>
            <p>Altijd al een mini concert willen meemaken? Meld je nu aan bij dit event en zie wat er gebeurd! </p>
            <p><a class="btn btn-default" href="group_map.php" role="button">Doe mee! &raquo;</a></p>
        </div>
    </div>


    <?php

    include_once('footer.php');

    ?>
