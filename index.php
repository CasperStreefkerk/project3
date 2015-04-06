<?php

include_once('header.php');

?>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Heartbeat</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" action="" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="Email" id="email"  name="email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Wachtwoord" id="password" name="password" class="form-control">
                </div>
                 <button type="submit" name="submitLogin" class="btn btn-success">Log in</button>
               <!--- <input type="submit" name="submitLogin" value="Log in" /> -->
                <a href="register.php" class="btn btn-success">Registreer</a>
            </form>


        </div><!--/.navbar-collapse -->
        <?php
        if ($session->keyExists("id")) {
            $session->message("notice", "Je bent al ingelogd, klik <a href='logout.php'>hier</a> als je wilt uitloggen");
            //header("Location: home.php");
            exit;
        }else{ ?>

        <?php if (isset($message)) : ?>
            <span class="<?= $message['type']; ?>"><?= $message['text']; ?></span>
        <?php endif; } ?>
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Welkom bij ons project!</h1>
        <p>Ons project is super mooi. Koop ons product nu voor maar 5 euro.</p>
        <p><a class="btn btn-primary btn-lg" href="register.php" role="button">Registreer nu! &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Functionaliteit 1</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">Lees meer &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Functionaliteit 2</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">Lees meer &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Functionaliteit 3</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">Lees meer &raquo;</a></p>
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Project 3 made by Casper, Sven and Dianchelo</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="includes/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="includes/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

