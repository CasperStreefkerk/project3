<?php
$password = '';
$email = '';

if(isset($_POST['submitLogin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $db->loginUser($email, $password);
    //var_dump($user);

    if(!$user){

        $session->message("error", "<span class='red'>Je hebt onjuiste gegevens ingevuld, probeer het nog eens</span>");
        header('Location: '.$_SERVER['PHP_SELF']);
        die;
        //header("Location: index.php");
    }else{

        if($user['type'] == 2){
            $session->message("error", "<span class='red'>TWEE</span>");
            header('Location: event_options.php');
            die;
        }

        if($user['type'] == 1){
            $session->message("error", "<span class='red'>TWEE</span>");
        }

        if($user['type'] == 3){
            $session->message("error", "<span class='red'>TWEE</span>");
        }


        //$session->message("error", "<span class='red'>JE BENT SUCCESVOL INGELOGD</span>");
        $session->set("id", $user['id']);

        header('Location: '.$_SERVER['PHP_SELF']);
        die;
        //header("Location: index.php");

    }


}


?>