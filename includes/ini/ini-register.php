<?php
if(isset($_POST['registerUser'])){
    $registered['id'] = "";

    echo $_POST;

//    echo $_POST['usertype'];
//    echo $_POST['email'];
//    echo $_POST['password'];

    $email = $_POST['email'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
    $firstname = $_POST['firstname'];

    $db->registerUser($email, $password, $usertype);
    $registered = $db->getUserIdByEmail($email);

    //echo $registered['id'];

    if($usertype == '1'){
            $lastid = $registered['id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $place = $_POST['place'];
            $zipcode = $_POST['zipcode'];

            $registerFan = $db->registerUsers($lastid, $firstname, $lastname, $address, $place, $zipcode);
            $session->message("error", "<span class='red'>Welkom FAN! <br/>
                                Je bent geregistreerd, log nu in met je gegevens.</span>");
            header("Location: index.php");

            //echo $lastid ." , ". $firstname ." , ". $lastname ." , ". $address ." , ". $place ." , ". $zipcode;
    }

    if($usertype == '2'){
        $lastid = $registered['id'];
        $name = $_POST['artist_name'];
        $management = $_POST['artist_management'];
        $contactperson_fn = $_POST['artist_cf'];
        $contactperson_ln = $_POST['artist_cl'];
        $phonenumber = $_POST['artist_phonenumber'];


        //echo $name . " , " . $management . " , " . $contactperson_fn . " , " . $contactperson_ln . " , " . $phonenumber;

        $registerArtist = $db->registerArtist($lastid, $name, $management, $contactperson_fn, $contactperson_ln, $phonenumber);
        $session->message("error", "<span class='red'>Welkom ARTIEST! <br/>
                                Je bent geregistreerd, log nu in met je gegevens.</span>");
        header("Location: index.php");


    }

    if($usertype == '3'){
        $lastid = $registered['id'];
        $companyname = $_POST['sponsor_companyname'];
        $contactperson_fn = $_POST['sponsor_cf'];
        $contactperson_ln = $_POST['sponsor_cl'];
        $address = $_POST['sponsor_address'];
        $place = $_POST['sponsor_place'];
        $zipcode = $_POST['sponsor_zipcode'];
        $phonenumber = $_POST['sponsor_phonenumber'];

        $registerSponsor = $db->registerSponsor($lastid, $companyname, $contactperson_fn, $contactperson_ln, $address, $place, $zipcode, $phonenumber);
        $session->message("error", "<span class='red'>Welkom SPONSOR! <br/>
                                Je bent geregistreerd, log nu in met je gegevens.</span>");
        header("Location: index.php");

    }

}