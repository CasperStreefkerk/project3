<?php
require_once "includes/initialize.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <meta name="description" content="Website for a school project.">
    <meta name="author" content="Casper Streefkerk">

    <title>Heartbeat</title>

    <!-- Bootstrap core CSS -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="includes/css/jumbotron.css" rel="stylesheet">

    <!-- Stylesheet voor google maps -->
    <link rel="stylesheet" href="css/googlemaps.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

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
            <a class="navbar-brand" href="index.php"><img src="includes/images/LOGO.png" width="70" height="70"  /> </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php

            if ($session->keyExists("id")) {
                // Eenmalige message nadat je bent ingelogd
                if(isset($message)) {
                    echo "<span class=" . $message['type'] . ">" . $message['text'] . "</span>";
                }
                // De navigationbar nadat je bent ingelogd -- Hier moeten de knoppen komen..
                echo "<div class='navbar-right'> <a href='logout.php'>Uitloggen</a> </div>";

            }else{ ?>

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

                <?php if (isset($message)) : ?>
                    <span class="<?= $message['type']; ?>"><?= $message['text']; ?></span>
                <?php endif; ?>


            <?php } ?>
        </div><!--/.navbar-collapse -->

    </div>
</nav>