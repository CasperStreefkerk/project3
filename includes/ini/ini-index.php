<?php
$password = '';
$email = '';

if(isset($_POST['submitLogin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $db->loginUser($email, $password);
    var_dump($user);

    if(!$user){

        $session->message("error", "<span class='red'>Je hebt onjuiste gegevens ingevuld, probeer het nog eens</span>");
        header('Location: '.$_SERVER['PHP_SELF']);
        die;
        //header("Location: index.php");
    }else{
        $session->message("error", "<span class='red'>JE BENT SUCCESVOL INGELOGD</span>");
        $session->set("id", $user['id']);

        if($user['type'] == 1){
            header("Location: events_main.php");
            die;
        }
        elseif($user['type'] == 2){
            header("Location: artists.php");
            die;


        }

        //header('Location: '.$_SERVER['PHP_SELF']);
        //die;
        //header("Location: index.php");

    }


}


?>