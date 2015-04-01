<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Website for a school project.">
    <meta name="author" content="Casper Streefkerk">

    <title>Heartbeat</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron.css" rel="stylesheet">

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
            <a class="navbar-brand" href="index.php">Heartbeat</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Wachtwoord" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Log in</button>
                <a href="register.php" class="btn btn-success">Registreer</a>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Welkom bij ons project!</h1>
        <p>Ons project is super mooi. Koop ons product nu voor maar 5 euro.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Registreer nu! &raquo;</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-6">
            <h2>Waarom registreren?</h2>
            <p>Door te registreren kunt u gebruik gaan maken van onze applicatie. Hierdoor krijgt u een leuke bezigheid, ziet u nieuwe plaatsen in de stad en unlocked u nieuwe exclusieve muziek. Daarnaast is het ook mogelijk om nieuwe mensen te ontmoeten met dezelfde passie voor muziek. </p>
            <p>Registreren kan hiernaast.</p>
        </div>
        <div class="col-md-6">
            <h2>Registreer hieronder</h2>
            <form role="form">
                <div class="form-group">
                    <select class="form-control" id="sel1">
                        <option>Ik ben een muziekliefhebber</option>
                        <option>Ik ben een artiest</option>
                        <option>Ik ben een platenmaatschappij</option>
                    </select>
                </div>
                <div class="form-group">
<!--                    <label for="email"></label>-->
                    <input type="text" class="form-control" id="firstname" placeholder="Voornaam">
                </div>
                <div class="form-group">
<!--                    <label for="pwd">Password:</label>-->
                    <input type="text" class="form-control" id="surname" placeholder="Achternaam">
                </div>
                <div class="form-group">
<!--                    <label for="pwd">Password:</label>-->
                    <input type="text" class="form-control" id="city" placeholder="Woonplaats">
                </div>
                <div class="form-group">
<!--                    <label for="pwd">Password:</label>-->
                    <input type="email" class="form-control" id="email" placeholder="Emailadres">
                </div>
                <div class="form-group">
                    <!--                    <label for="pwd">Password:</label>-->
                    <input type="password" class="form-control" id="password" placeholder="Wachtwoord">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
<!--        <div class="col-md-5">-->
<!--            <h2>Functionaliteit 3</h2>-->
<!--            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>-->
<!--            <p><a class="btn btn-default" href="#" role="button">Lees meer &raquo;</a></p>-->
<!--        </div>-->
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
<script src="../js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>

