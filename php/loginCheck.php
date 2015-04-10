<?php
include("php/settings.php");


if(isset($_POST['submitLogin'])) {
    $gebruikersnaam = $_POST['email'];
    $wachtwoord = $_POST['password'];
    $loginQuery = "SELECT * FROM user WHERE email ='$gebruikersnaam' AND password = '$wachtwoord'";
    $loginQueryResult = mysqli_query($conn, $loginQuery);

    if ($row = mysqli_fetch_assoc($loginQueryResult)) {
        // inloggen
        $_SESSION['loggedIn'] = true;
        echo $row['type'];
        if($row['type'] == "3"){
            echo "artiest!";
            header('location: artists.php');
        }
        if($row['type'] == "1"){
            echo "Fan!";
            header('location: events_main.php');
        }

    } else {
        $loginError = "Uw gebruikersnaam of wachtwoord is onjuist.";
    }
}
?>

<!--if(isset($_POST['submit'])){-->
<!--$gebruikersnaam = $_POST['username'];-->
<!--$wachtwoord = $_POST['password'];-->
<!--$loginQuery = "SELECT * FROM gebruikers WHERE gebruikersnaam ='$gebruikersnaam' AND wachtwoord = '$wachtwoord'";-->
<!--$loginQueryResult = mysqli_query($conn, $loginQuery);-->
<!---->
<!--if ($row = mysqli_fetch_assoc($loginQueryResult)){-->
<!--// inloggen-->
<!--$_SESSION['loggedIn'] = true;-->
<!--$_SESSION['naam'] = $row["Naam"];-->
<!--header('location: admin-reserveringen.php');-->
<!--}-->
<!--else-->
<!--{-->
<!--$loginError = "Uw gebruikersnaam of wachtwoord is onjuist.";-->
<!--}-->
<!--};-->
