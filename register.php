<?php

include_once('header.php');

?>


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
            <form  action="" method="POST">
                <div class="form-group">
                    <select class="form-control" id="usertype" name="usertype">
                        <option value="1">Ik ben een muziekliefhebber</option>
                        <option value="2">Ik ben een artiest</option>
                        <option value="3">Ik ben een platenmaatschappij</option>
                    </select>
                </div>


                <div id="users" style="display:;"> <!-- BEGIN DIV USERS -->
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

                <!-- Div begin artists -->
                <div id="artists" style="display:none;">
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="artist_name" id="artist_name" placeholder="Naam">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="artist_management" id="artist_management" placeholder="Management">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="artist_cf" id="artist_cf" placeholder="Contactpersoon voornaam">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="artist_cl" id="artist_cl" placeholder="Contactpersoon achternaam">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="artist_phonenumber" id="artist_phonenumber" placeholder="Telefoonnummer">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="email" class="form-control" id="email" name="email" placeholder="Emailadres">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Wachtwoord" id="password" name="password" class="form-control" >
                    </div>
                </div>
                <!-- Div end Artists -->

                <!-- Div begin sponsors -->
                <div id="sponsors" style="display:none;">
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="sponsor_companyname" id="sponsor_companyname" placeholder="Bedrijfsnaam">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="sponsor_cf" id="sponsor_cf" placeholder="Contactpersoon voornaam">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="sponsor_cl" id="sponsor_cl" placeholder="Contactpersoon achternaam">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="sponsor_phonenumber" id="sponsor_phonenumber" placeholder="Telefoonnummer">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="sponsor_address" id="sponsor_address" placeholder="Adres">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="sponsor_place" id="sponsor_place" placeholder="Plaats">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="text" class="form-control" name="sponsor_zipcode" id="sponsor_zipcode" placeholder="Postcode">
                    </div>
                    <div class="form-group">
                        <!--                    <label for="pwd">Password:</label>-->
                        <input type="email" class="form-control" id="email" name="email" placeholder="Emailadres">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Wachtwoord" id="password" name="password" class="form-control">
                    </div>
                </div>
                <!-- Div end sponsors -->
                <button type="submit" name="registerUser" id="registerUser" class="btn btn-default">Submit</button>
            </form>
        </div>
<!--        <div class="col-md-5">-->
<!--            <h2>Functionaliteit 3</h2>-->
<!--            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>-->
<!--            <p><a class="btn btn-default" href="#" role="button">Lees meer &raquo;</a></p>-->
<!--        </div>-->
    </div>

    <?php

    include_once('footer.php');

    ?>

