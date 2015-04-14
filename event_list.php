<?php
include_once('header.php');
?>



    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Events</h1>
            <p>Bekijk hier alle evenementen</p>
        </div>
    </div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            <p>Klik op de titel voor een gedetaileerde weergave.</p>

            <?php if (!empty($allevents)) : ?>

                <?php foreach ($allevents as $ae) : ?>
                    <p class="bg-info">Event: <a href="solo_map.php?id=<?= $ae->solo_events_id; ?>"><?= $ae->name; ?></a></p>

                <?php endforeach; ?>

            <?php endif; ?>

        </div>
    </div>


<?php

include_once('footer.php');

?>


