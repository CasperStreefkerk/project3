<?php

include_once('header.php');

?>


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Zoek contact</h1>
        <p>Contact pagina met mailform functie</p>
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
            <form  action="" method="POST">
                <div class="form-group">
                    <select class="form-control" id="usertype" name="usertype">
                        <option value="1">Ik ben een muziekliefhebber</option>
                        <option value="2">Ik ben een artiest</option>
                        <option value="3">Ik ben een platenmaatschappij</option>
                    </select>
                </div>


                <div id="users"> <!-- BEGIN DIV USERS -->
                    <div class="form-group">
                        <!--                    <label for="email"></label>-->
                        <input type="text" class="form-control" id="firstname"  name="firstname" placeholder="Voornaam">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Achternaam">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="address" id="address" placeholder="Adres">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" id="place" name="place" placeholder="Woonplaats">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Postcode">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="email" class="form-control" id="email" name="email" placeholder="Emailadres">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Wachtwoord" id="password" name="password" class="form-control">
                    </div>
                </div> <!-- END DIV USERS -->
                <button type="submit" name="registerUser" id="registerUser" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

    <?php

    include_once('footer.php');

    ?>

