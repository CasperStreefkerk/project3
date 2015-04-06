<?php
if(isset($_POST['registerUser'])){
    $usertype = $_POST['sel1'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $register = $db->registerUser($email, $password, $usertype);



    switch ($usertype) {
        case "1":
            $lastid = $register;
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $place = $_POST['place'];
            $zipcode = $_POST['zipcode'];

            $registerFan = $db->registerUsers($lastid, $firstname, $lastname, $address, $place, $zipcode);

            $session->message("error", "<span class='red'>FAN GEREGISTREERD</span>");
            header("Location: index.php");

            break;
        case "2":
            $lastid = $register;
            $name = $_POST['name'];
            $management = $_POST['management'];
            $contactperson_fn = $_POST['contactperson_firstname'];
            $contactperson_ln = $_POST['contactperson_lastnname'];
            $phonenumber = $_POST['phonenumber'];

            $registerArtist = $db->registerArtist($lastid, $name, $management, $contactperson_fn, $contactperson_ln, $phonenumber );
            break;
        case "3":
            $lastid = $register;
            $companyname = $_POST['companyname'];
            $contactperson_fn = $_POST['contactperson_firstname'];
            $contactperson_ln = $_POST['contactperson_lastname'];
            $address = $_POST['address'];
            $place = $_POST['place'];
            $zipcode = $_POST['zipcode'];

            $registerArtist = $db->registerSponsor($lastid, $companyname, $contactperson_fn, $contactperson_ln, address, $place, $zipcode);


            break;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $registered = $db->registerUser($email, $password);
    $session->message("error", "<span class='red'>Je bent geregistreerd, log nu in met je gegevens.</span>");
    header("Location: index.php");


}